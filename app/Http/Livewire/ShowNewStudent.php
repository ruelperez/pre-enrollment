<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\FillUp;
use App\Models\Newstudent;
use App\Models\Oldstudent;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\User;
use App\Models\UsnList;
use App\Models\Yearlevel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowNewStudent extends Component
{

    public $base=0, $form_data, $jm=0, $year_id, $userDATA, $temp=0, $bs=0, $course_id, $semester_id, $year, $course, $ng=0, $searchInput, $rgs=0;

    public function render()
    {
        $this->course_data = Course::all();
        $this->year_data = Yearlevel::all();
        $this->semister_data = Semester::all();

        if ($this->temp != 0 and $this->temp != $this->searchInput){
            $this->ng = 1;
            $this->bs = 0;
            $this->search();
        }
        elseif ($this->searchInput != "" and $this->jm == 1){
            $this->ng = 0;
        }
        elseif ($this->rgs == 1){
            $this->ng = 0;
            $this->search();
        }
        elseif ($this->searchInput != ""){
            $this->ng = 1;
            $this->search();
        }
        else{
            $this->ng = 0;
            $this->userDATA = Newstudent::all();

        }

        return view('livewire.show-new-student');
    }

    public function search(){
        $this->resultss = DB::table('newstudents')
            ->where('last_school', 'LIKE', '%'.$this->searchInput.'%')
            ->get();

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
    public function loadData($id){
        $this->jm = 1;
        $this->ng = 0;
        $f = User::find($id);
        $this->searchInput = $f->last_school;
        $this->temp = $f->last_school;
        $this->bs = 1;
        $school_data = User::where('last_school',$f->last_school)->get();
        $this->form_data = $school_data;
    }

//    public function click_suggest($id){
//        $this->ng = 0;
//        $f = User::find($id);
//        $this->searchInput = $f->last_school;
//    }

    public  function search_school(){

    }

    public function transfer(){
       $hh = UsnList::all();
       foreach ($hh as $h){
            \App\Models\Studentinfo::create([
               "last_name" => $h->lname,
               "first_name" => $h->fname,
                "usn" => $h->id,
            ]);
       }
    }
}
