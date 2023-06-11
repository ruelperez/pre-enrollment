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
    public $student_number, $personToContact, $emergency_contact, $guardian_contact, $emergency_address, $ersonToContact, $rg=0, $guardian_address, $parent_contact, $city_address, $provincial_address, $ff, $age, $mother_occupation, $mother_age, $mother, $father_age, $father_occupation, $father, $birthday, $status, $height, $weight, $citizen, $fullname, $course_id, $year_id, $semester_id, $student_class_old, $student_class_new, $semester, $school_year_start, $school_year_end, $fname, $lname, $mname, $address,
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

             $this->fullname= $f->fullname;
              $this->age= $f->age;
              $this->status= $f->status;
              $this->height= $f->height;
              $this->weight= $f->weight;
              $this->citizen= $f->citizen;
             $this->father=  $f->father;
             $this->father_occupation=  $f->father_occupation;
             $this->father_age= $f->father_age;
             $this->mother=  $f->mother;
              $this->mother_occupation= $f->mother_occupation;
              $this->mother_age= $f->mother_age;
              $this->provincial_address= $f->provincial_address;
              $this->city_address= $f->city_address;
             $this->parent_contact= $f->parent_contact;
             $this->guardian_address=  $f->guardian_address;
              $this->guardian_contact= $f->guardian_contact;
             $this->personToContact= $f->personToContact;
              $this->emergency_contact= $f->emergency_contact;
             $this->emergency_address =  $f->emergency_address;
            $this->da = 1;
        }

        $this->fname = auth()->user()->first_name;
        $this->lname = auth()->user()->last_name;
        $this->mname = auth()->user()->middle_name;
        $this->sex = auth()->user()->sex;
        $this->status = auth()->user()->status;
        $this->address = auth()->user()->address;
        $this->age = auth()->user()->age;
        $this->birthdate = auth()->user()->birthday;
        $this->fullname = $this->fname . " " . $this->mname . " " . $this->lname;





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
                'fullname' => $this->fullname,
                'age' => $this->age,
                'status' => $this->status,
                'height'=> $this->height,
                'weight'=> $this->weight,
                'citizen'=> $this->citizen,
                'father'=> $this->father,
                'father_occupation'=> $this->father_occupation,
                'father_age'=> $this->father_age,
                'mother'=> $this->mother,
                'mother_occupation'=> $this->mother_occupation,
                'mother_age'=> $this->mother_age,
                'provincial_address'=>$this->provincial_address,
                'city_address'=>$this->city_address,
                'parent_contact'=> $this->parent_contact,
                'guardian_address'=> $this->guardian_address,
                'guardian_contact'=> $this->guardian_contact,
                'personToContact'=> $this->personToContact,
                'emergency_address' => $this->emergency_address,
                'emergency_contact'=> $this->emergency_contact,
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
            $f->fullname = $this->fullname;
            $f->age = $this->age;
            $f->status = $this->status;
            $f->height = $this->height;
            $f->weight = $this->weight;
            $f->citizen = $this->citizen;
            $f->father = $this->father;
            $f->father_occupation = $this->father_occupation;
            $f->father_age= $this->father_age;
            $f->mother = $this->mother;
            $f->mother_occupation = $this->mother_occupation;
            $f->mother_age = $this->mother_age;
            $f->provincial_address = $this->provincial_address;
            $f->city_address = $this->city_address;
            $f->parent_contact = $this->parent_contact;
            $f->guardian_address = $this->guardian_address;
            $f->guardian_contact = $this->guardian_contact;
            $f->personToContact = $this->personToContact;
            $f->emergency_contact = $this->emergency_contact;
            $f->emergency_address = $this->emergency_address;
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
