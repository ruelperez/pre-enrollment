<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\FillUp;
use App\Models\Semester;
use App\Models\Yearlevel;
use Livewire\Component;
use Barryvdh\DomPDF\PDF;


class EnrolmentForm extends Component
{
    public $student_number, $rg=0, $ff, $course_id, $year_id, $semester_id, $student_class_old, $student_class_new, $semester, $school_year_start, $school_year_end, $fname, $lname, $mname, $address,
            $guardian, $user_id, $contact, $da=0, $birthdate, $birthplace, $sex, $course, $yearlevel, $student_class;

    public function render()
    {
        $this->user_id = auth()->user()->id;
        $this->student_number = auth()->user()->usn;

        $m=0;
        $rg = [];
        $fill = FillUp::all();
        foreach ($fill as $fil){
            if ($fil->user_id == auth()->user()->id and $fil->course_id == $this->course_id and $fil->yearlevel_id == $this->year_id and $fil->semester_id == $this->semester_id){
                $rg[] = $fil->id;
                $this->ff = $fil->id;
                $m=1;
            }
        }
        if ($m == 1){
            $f = FillUp::find($rg[0]);
            $this->school_year_start = $f->school_year_start;
            $this->school_year_end = $f->school_year_end;
            $this->fname = $f->first_name;
            $this->lname = $f->last_name;
            $this->mname = $f->middle_name;
            $this->address = $f->address;
            $this->guardian = $f->guardian;
            $this->contact = $f->contact_number;
            $this->birthdate = $f->birthdate;
            $this->birthplace = $f->birthplace;
            $this->sex = "$f->sex";
            $this->student_class = $f->student_class;
            $this->da = 1;
        }

        $this->fname = auth()->user()->first_name;
        $this->lname = auth()->user()->last_name;

        return view('livewire.enrolment-form');
    }

    public function mount($courseID,$semesterID,$yearID){
        $crs = Course::find($courseID);
        $this->course = $crs->name;
        $this->course_id = $crs->id;
        $sem = Semester::find($semesterID);
        $this->semester = $sem->sem;
        $this->semester_id = $sem->id;
        $yr = Yearlevel::find($yearID);
        $this->year_id = $yr->id;
        $this->yearlevel = $yr->level;
    }

    public function submit_enrol(){
        $rs = [];
        $m=0;

        $this->validate([
            'school_year_start' => 'required|integer',
            'school_year_end' => 'required|integer',
        ]);

        if ($this->student_class_new == false or $this->student_class_new == null){
                $this->student_class = $this->student_class_old;
        }
        else{
            $this->student_class = $this->student_class_new;
        }

        $fill = FillUp::all();
        foreach ($fill as $fil){
            if ($fil->user_id == auth()->user()->id and $fil->course_id == $this->course_id and $fil->yearlevel_id == $this->year_id and $fil->semester_id == $this->semester_id){
                $m=1;
                $rs[] = $fil->id;
            }
        }

        if ($m == 0){
            $fl = FillUp::all();
//            foreach ($fl as $fd){
//                if ($fd->student_number == $this->student_number){
//                    session()->flash('failed','Input');
//                    return;
//
//                }
//            }
            FillUp::create([
                'user_id' => auth()->user()->id,
                'course_id' => $this->course_id,
                'yearlevel_id' => $this->year_id,
                'semester_id' => $this->semester_id,
                'student_number' => $this->student_number,
                'student_class' => $this->student_class,
                'school_year_start' => $this->school_year_start,
                'school_year_end' => $this->school_year_end,
                'first_name' => $this->fname,
                'last_name' => $this->lname,
                'middle_name' => $this->mname,
                'address' => $this->address,
                'guardian' => $this->guardian,
                'contact_number' => $this->contact,
                'birthdate' => $this->birthdate,
                'birthplace' => $this->birthplace,
                'sex' => $this->sex,
            ]);

            $this->rg = 1;
        }
        elseif ($m == 1){
            $f = FillUp::find($rs[0]);
            $f->student_number = $this->student_number;
            $f->course_id = $this->course_id;
            $f->yearlevel_id = $this->year_id;
            $f->semester_id = $this->semester_id;
            $f->school_year_start= $this->school_year_start;
            $f->school_year_end = $this->school_year_end;
            $f->first_name = $this->fname;
            $f->last_name = $this->lname;
            $f->middle_name = $this->mname;
            $f->address = $this->address;
            $f->guardian = $this->guardian;
            $f->contact_number = $this->contact;
            $f->birthdate = $this->birthdate;
            $f->birthplace = $this->birthplace;
            $f->sex = $this->sex;
            $f->student_class = $this->student_class;
            $f->save();

            $this->rg=1;
        }



    }

    public function del(){
        FillUp::find($this->ff)->delete();
        $this->student_number = null;
        $this->school_year_start = "";
        $this->school_year_end = "";
        $this->fname = "";
        $this->lname ="";
        $this->mname = "";
        $this->address = "";
        $this->guardian = "";
        $this->contact = "";
        $this->birthdate = "";
        $this->birthplace = "";
        $this->sex = "";
        $this->student_class = "";
        $this->rg=0;
        $this->da=0;
    }

}
