<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Yearlevel;
use Livewire\Component;

class SubjectInfo extends Component
{
    public $course_id, $year_id, $semester_id, $year_data, $course_data, $semister_data, $form_data = [], $base=0, $l=0,
        $course_name, $code, $unit, $day, $time, $room, $modality, $teacher, $tuition, $editID, $rmv, $rs=0, $kurso_id, $modal_data, $sem_id, $subject_id, $level_id, $courseDATA, $yearDATA, $semesterDATA;

    public function render()
    {
        $this->course_data = Course::all();
        $this->year_data = Yearlevel::all();
        $this->semister_data = Semester::all();
        $this->yearDATA = Yearlevel::all();
        $this->courseDATA = Course::all();
        $this->semesterDATA = Semester::all();
        if ($this->rs > 1){
            $this->delForm();
        }
        elseif ($this->l == 1){
            $this->l=0;
        }
        else{
            $this->formData();
        }
        $this->addSubject_submit();
        return view('livewire.subject-info');
    }

    public function submit(){
        $this->rs = null;
        if ($this->year_id == null or $this->course_id == null or $this->semester_id == null){
            return;
        }
        $this->base = 1;
        $this->validate([
            'year_id' => 'required',
            'course_id' => 'required',
            'semester_id' => 'required',
        ]);

        $subject_data = Subject::all();

        foreach ($subject_data as $sub_data){
            if ($sub_data->course_id == $this->course_id and $sub_data->yearlevel_id == $this->year_id and $sub_data->semester_id == $this->semester_id){
                $data[] = $sub_data->id;
            }
            else{
                $this->form_data = "No Data Posted";
            }
        }
        if (isset($data)){
            for ($i=0; $i<count($data); $i++){
                $sjt_data[] = Subject::find($data[$i]);
            }
            $this->form_data = $sjt_data;
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

    public function edit($id){
        $this->editID = $id;
        $sub = Subject::find($id);
        $this->course_name = $sub->name;
        $this->code = $sub->subject_code;
        $this->unit = $sub->unit;
        $this->day = $sub->day;
        $this->time = $sub->time;
        $this->room = $sub->room;
        $this->modality = $sub->modality;
        $this->teacher = $sub->teacher;
        $this->tuition = $sub->tuition;

        $this->formData();
    }

    public function close(){
        $this->course_name = "";
        $this->code = "";
        $this->unit = "";
        $this->day = "";
        $this->time = "";
        $this->room = "";
        $this->modality = "";
        $this->teacher = "";
        $this->tuition = "";

        $this->formData();
    }

    public function del($id){
        try {
            Subject::find($id)->delete();
            session()->flash('deleted',"Deleted Successfully!!");
        }
        catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting!!");
        }

        $this->formData();
    }

    public function remove($id){
        $this->rmv = $id;
        $this->rs++;

    }

    public function addSubject_submit(){

        $data = [];
        $sjt_data = [];
        if ($this->level_id == null or $this->kurso_id == null or $this->sem_id == null){
            return;
        }

        $this->validate([
            'level_id' => 'required',
            'kurso_id' => 'required',
            'sem_id' => 'required',
        ]);

        $subject_data = Subject::all();

        foreach ($subject_data as $sub_data){
            if ($sub_data->course_id == $this->kurso_id and $sub_data->yearlevel_id == $this->level_id and $sub_data->semester_id == $this->sem_id){
                $data[] = $sub_data->id;
            }
            else{
                $this->modal_data = "No Data Posted";
            }
        }
        if (isset($data)){
            for ($i=0; $i<count($data); $i++){
                $sjt_data[] = Subject::find($data[$i]);
            }
            $this->modal_data = $sjt_data;
        }
        else{
            $this->modal_data = "No Data Posted";
        }

    }

    public function load(){

    }

    public function adSub(){
        $this->l = 1;
        $jj = [];
        $ht = [];
        $dt = [];
        foreach ($this->form_data as $kk){
            $jj[] = $kk['id'];
        }

        for ($y=0; $y<count($jj); $y++){
            $ht[] = Subject::find($jj[$y]);
        }

        $ht[] = Subject::find($this->subject_id);

        $this->form_data = $ht;

    }

}
