<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\FillUp;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\User;
use App\Models\Yearlevel;
use Livewire\Component;

class ShowNewStudent extends Component
{

    public $base=0, $form_data, $year_id, $course_id, $semester_id, $year, $course;

    public function render()
    {
        $this->course_data = Course::all();
        $this->year_data = Yearlevel::all();
        $this->semister_data = Semester::all();

        return view('livewire.show-new-student');
    }

    public function submit(){
        $data = [];
        if ($this->year_id == null or $this->course_id == null or $this->semester_id == null){
            return;
        }
        $this->base = 1;
        $this->validate([
            'year_id' => 'required',
            'course_id' => 'required',
            'semester_id' => 'required',
        ]);

        $subject_data = FillUp::all();

        foreach ($subject_data as $sub_data){
            if ($sub_data->course_id == $this->course_id and $sub_data->yearlevel_id == $this->year_id and $sub_data->semester_id == $this->semester_id){
                $data[] = $sub_data->user_id;
            }
            else{
                $this->form_data = "No Data Posted";
            }
        }

        if (count($data) > 0){
            for ($i=0; $i<count($data); $i++){
                $sjt_data[] = User::find($data[$i]);
            }
            $dj = [];
            foreach ($sjt_data as $sj){
                if ($sj->last_school != null){
                    $dj[] = $sj->id;
                }
            }
            $hn = [];
            for ($p=0; $p<count($dj); $p++){
                $hn[] = User::find($dj[$p]);
            }

            $this->form_data = $hn;
            $this->year = Yearlevel::find($this->year_id)->level;
            $this->course = Course::find($this->course_id)->name;
        }
        else{
            $this->form_data = "No Data Posted";
        }

    }
    public function loadData(){

    }
}
