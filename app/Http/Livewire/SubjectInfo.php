<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Semester;
use App\Models\StudentSubject;
use App\Models\Subject;
use App\Models\User;
use App\Models\Yearlevel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SubjectInfo extends Component
{
    public $course_id, $year_id, $semester_id, $asd = "", $hm, $resultss, $year_data, $searchInput, $course_data, $semister_data, $form_data = [], $base=0, $l=0, $kl=0,
        $course_name, $ng=0, $rgs=0, $code, $unit, $day, $time, $room, $modality, $teacher, $tuition, $editID, $rmv, $courseDATA, $yearDATA, $semesterDATA, $userID;

    public function render()
    {
        $this->userID = auth()->user()->id;
        $this->course_data = Course::all();
        $this->year_data = Yearlevel::all();
        $this->semister_data = Semester::all();
        $this->yearDATA = Yearlevel::all();
        $this->courseDATA = Course::all();
        $this->semesterDATA = Semester::all();

        if ($this->rgs == 1){
            $this->ng = 0;
            $this->search();
        }
        elseif ($this->searchInput != ""){
            $this->ng = 1;
            $this->search();
        }
        elseif($this->base == 1){
            $this->studentSubjectData();
            $this->ng = 0;
        }

        return view('livewire.subject-info');
    }

    public function submit(){
        $subData = [];
        $save_data = [];
        $datas = [];
        $rk = [];
        $gh = 0;
        $fn = [];
        if ($this->year_id == null or $this->course_id == null or $this->semester_id == null){
            return;
        }

        $this->validate([
            'year_id' => 'required',
            'course_id' => 'required',
            'semester_id' => 'required',
        ]);

        $subject_data = Subject::all();

        foreach ($subject_data as $sub_data){
            if ($sub_data->yearlevel_id == $this->year_id and $sub_data->semester_id == $this->semester_id and $sub_data->course_id == $this->course_id){
                $data[] = $sub_data->id;
            }
            else{
                $this->form_data = "No Data Posted";
            }
        }
        if (isset($data)){

            $stu = StudentSubject::all();

            // check if there is a data in student_subjects table
            for ($r=0; $r<count($data); $r++){
                foreach ($stu as $stud){
                    if ($stud->user_id == $this->userID and $stud->subject_id == $data[$r] and $stud->yearlevel_id == $this->year_id and $stud->semester_id == $this->semester_id and $stud->course_id == $this->course_id){
                        $gh=1;
                        $datas[] = $stud->subject_id;
                    }
                }
            }

            if ($gh == 0){
                for ($j=0; $j<count($data); $j++){
                    StudentSubject::create([
                        'subject_id' => $data[$j],
                        'user_id' => $this->userID,
                        'course_id' => $this->course_id,
                        'semester_id' => $this->semester_id,
                        'yearlevel_id' => $this->year_id,
                    ]);
                }

               $das = StudentSubject::all();

                for ($q=0; $q<count($data); $q++){
                    foreach ($das as $da){
                        if ($da->user_id == $this->userID and $da->subject_id == $data[$q] and $da->course_id == $this->course_id and $da->semester_id == $this->semester_id and $da->yearlevel_id == $this->year_id){
                            $rk[] = $da->subject_id;
                        }
                    }
                }
                for ($p=0; $p<count($rk); $p++){
                    $fn[] = Subject::find($rk[$p]);
                }

                $this->form_data = $fn;
                $this->base = 1;
            }
            elseif($gh == 1){
                $das = StudentSubject::all();
                for ($q=0; $q<count($data); $q++){
                    foreach ($das as $da){
                        if ($da->user_id == $this->userID and $da->subject_id == $data[$q] and $da->course_id == $this->course_id and $da->semester_id == $this->semester_id and $da->yearlevel_id == $this->year_id){
                            $rk[] = $da->subject_id;
                        }
                    }
                }
                for ($p=0; $p<count($rk); $p++){
                    $fn[] = Subject::find($rk[$p]);
                }

                $this->form_data = $fn;
                $this->base = 1;
            }

        }
        else{
            $this->form_data = "No Data Posted";
        }

        $this->reset_data();
    }

    public function submit_reg(){

        try {
            Subject::create([
                'name' => $this->course_name,
                'subject_code' => $this->code,
                'unit' => $this->unit,
                'day' => $this->day,
                'time' => $this->time,
                'room' => $this->room,
                'modality' => $this->modality,
                'teacher' => $this->teacher,
                'tuition' => $this->tuition,
                'course_id' => $this->course_id,
                'yearlevel_id' => $this->year_id,
                'semester_id' => $this->semester_id,
            ]);
            $this->reset_data();
            session()->flash('dataAdded',"Added Successfully");
        }
        catch (\Exception $e){
            session()->flash('dataError',"Something goes wrong while Adding Data");
        }
        $this->formData();
    }

//    public function submit_edit(){
//
//        try {
//            $new = Subject::find($this->editID);
//            $new->name = $this->course_name;
//            $new->subject_code = $this->code;
//            $new->unit = $this->unit;
//            $new->day = $this->day;
//            $new->time = $this->time;
//            $new->room = $this->room;
//            $new->modality = $this->modality;
//            $new->teacher = $this->teacher;
//            $new->tuition = $this->tuition;
//            $new->course_id = $this->course_id;
//            $new->yearlevel_id = $this->year_id;
//            $new->semester_id = $this->semester_id;
//            $new->save();
//            session()->flash('dataAdded',"Successfully Updated Data");
//        }
//        catch (\Exception $e){
//            session()->flash('dataError',"Something goes wrong while Editing!!");
//        }
//    }

    public function sub_edit(){
        try {
            $new = Subject::find($this->editID);
            $new->name = $this->course_name;
            $new->subject_code = $this->code;
            $new->unit = $this->unit;
            $new->day = $this->day;
            $new->time = $this->time;
            $new->room = $this->room;
            $new->modality = $this->modality;
            $new->teacher = $this->teacher;
            $new->tuition = $this->tuition;
            $new->course_id = $this->course_id;
            $new->yearlevel_id = $this->year_id;
            $new->semester_id = $this->semester_id;
            $new->save();
            session()->flash('dataAdded',"Successfully Updated Data");
        }
        catch (\Exception $e){
            session()->flash('dataError',"Something goes wrong while Editing!!");
        }
        $this->reset_data();
        $this->formData();
    }

    public function formData(){
        $sjt_data = [];
        $get_data = [];
        $data = [];

        $subject_data = Subject::all();

        foreach ($subject_data as $sub_data){
            if ($sub_data->course_id == $this->course_id and $sub_data->yearlevel_id == $this->year_id and $sub_data->semester_id == $this->semester_id){
                $data[] = $sub_data->id;
            }
            else{
                $this->form_data = "No Data Posted";
            }
        }
        if (count($data) > 0){

            for ($i=0; $i<count($data); $i++){
                $sjt_data[] = Subject::find($data[$i]);
            }
            $this->form_data = $sjt_data;

            if ($this->rs == 1){
                foreach ($this->form_data as $dta){

                    if ($dta->id != $this->rmv){
                        $get_data[] = Subject::find($dta->id);
                    }

                }
                $this->form_data = $get_data;

            }
        }
        else{
            $this->form_data = "No Data Posted";
        }
    }

    public function delForm(){
        $this->vc = 0;
        $get_data = [];
        $finish = [];
        $o=0;
        foreach ($this->form_data as $fg){

            if ($this->rmv != $fg['id']){
                $get_data[] = $fg['id'];
            }

        }

        for ($m=0; $m<count($get_data); $m++){
            $finish[] = Subject::find($get_data[$m]);
        }

        $this->form_data = $finish;

    }

    public function reset_data(){
        $this->course_name = "";
        $this->code = "";
        $this->unit = "";
        $this->day = "";
        $this->time = "";
        $this->room = "";
        $this->modality = "";
        $this->teacher = "";
        $this->tuition = "";
    }

    public function loadData(){

    }

    public function remove($id){
        $this->base = 1;
        $this->searchInput = "";
        $stu = StudentSubject::all();
        foreach ($stu as $sub){
            if ($sub->user_id == $this->userID and $sub->subject_id == $id and $sub->yearlevel_id == $this->year_id and $sub->course_id == $this->course_id and $sub->semester_id == $this->semester_id){
                StudentSubject::find($sub->id)->delete();
            }
        }
    }

    public function load(){
        $ma = [];
        $rk = [];
        $fn = [];
        $data = [];
        $this->rgs = 0;
        $this->searchInput = "";

        if ($this->year_id == null or $this->course_id == null or $this->semester_id == null){
            return;
        }

        $rj = StudentSubject::all();
        foreach ($rj as $rn){
            if ($rn->user_id == $this->userID and $rn->semester_id == $this->semester_id and $rn->course_id == $this->course_id and $rn->yearlevel_id == $this->year_id){
                $ma[] = $rn->id;
            }
        }

        if (count($ma) > 0){
            for ($g=0; $g<count($ma); $g++){
                StudentSubject::find($ma[$g])->delete();
            }

            $subject_data = Subject::all();

            foreach ($subject_data as $sub_data){
                if ($sub_data->yearlevel_id == $this->year_id and $sub_data->semester_id == $this->semester_id and $sub_data->course_id == $this->course_id){
                    $data[] = $sub_data->id;
                }
                else{
                    $this->form_data = "No Data Posted";
                }
            }
            if (isset($data)){

                $stu = StudentSubject::all();

                for ($j=0; $j<count($data); $j++){
                    StudentSubject::create([
                        'subject_id' => $data[$j],
                        'user_id' => $this->userID,
                        'course_id' => $this->course_id,
                        'semester_id' => $this->semester_id,
                        'yearlevel_id' => $this->year_id,
                    ]);
                }
                $this->base = 1;
            }
            else{
                $this->form_data = "No Data Posted";
            }

        }
        else{
            $subject_data = Subject::all();

            foreach ($subject_data as $sub_data){
                if ($sub_data->yearlevel_id == $this->year_id and $sub_data->semester_id == $this->semester_id and $sub_data->course_id == $this->course_id){
                    $data[] = $sub_data->id;
                }
                else{
                    $this->form_data = "No Data Posted";
                }
            }
            if (isset($data)){

                $stu = StudentSubject::all();

                for ($j=0; $j<count($data); $j++){
                    StudentSubject::create([
                        'subject_id' => $data[$j],
                        'user_id' => $this->userID,
                        'course_id' => $this->course_id,
                        'semester_id' => $this->semester_id,
                        'yearlevel_id' => $this->year_id,
                    ]);
                }
                $this->base = 1;
            }
            else{
                $this->form_data = "No Data Posted";
            }
        }

    }

    public function search(){
        $this->resultss = DB::table('subjects')
            ->where('subject_code', 'LIKE', '%'.$this->searchInput.'%')
            ->get();
        if ($this->base == 1){
            $this->studentSubjectData();
        }

    }

    public function studentSubjectData(){
        $fn = [];
        $rk = [];

        $das = StudentSubject::all();
        foreach ($das as $da){
            if ($da->user_id == $this->userID and $da->course_id == $this->course_id and $da->semester_id == $this->semester_id and $da->yearlevel_id == $this->year_id){
                $rk[] = $da->subject_id;
            }
        }
        if (count($rk) > 0){
            for ($p=0; $p<count($rk); $p++){
                $fn[] = Subject::find($rk[$p]);
            }
            $this->form_data = $fn;
        }
        else{
            $this->form_data = "No Data Posted";
        }

    }

    public function click_suggest($id){
        $this->hm = $id;
        $this->rgs = 1;
        $data = Subject::find($id);
        $this->searchInput = $data->subject_code;
        $this->ng = 0;
    }

    public function subjectADD(){
        $this->rgs = 0;
        $this->searchInput = "";
        try {
            session()->flash('good',"Added Successfully");
        }
        catch (\Exception $e){
            session()->flash('bad',"Failed to add");
        }
        StudentSubject::create([
            'subject_id' => $this->hm,
            'user_id' => $this->userID,
            'course_id' => $this->course_id,
            'semester_id' => $this->semester_id,
            'yearlevel_id' => $this->year_id,
        ]);
    }

}
