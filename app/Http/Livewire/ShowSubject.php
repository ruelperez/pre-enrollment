<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Yearlevel;
use Livewire\Component;

class ShowSubject extends Component
{
    public $course_id, $year_id, $semester_id, $year_data, $course_data, $semister_data, $form_data, $base=0,
           $course_name, $code, $unit, $day, $time, $room, $modality, $teacher, $tuition, $editID;

    public function render()
    {
        $this->course_data = Course::all();
        $this->year_data = Yearlevel::all();
        $this->semister_data = Semester::all();
        return view('livewire.show-subject');
    }

    public function submit(){
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

}
