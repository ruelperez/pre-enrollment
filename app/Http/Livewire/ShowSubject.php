<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Yearlevel;
use Livewire\Component;

class ShowSubject extends Component
{
    public $course_id, $year_id, $semester_id, $year_data, $course_data, $semister_data, $form_data, $base=0;

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
    }
}
