<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\FillUp;
use App\Models\Newstudent;
use App\Models\Oldstudent;
use App\Models\Semester;
use App\Models\User;
use App\Models\UsnList;
use App\Models\Yearlevel;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;

class StudentInfo extends Component
{
    public $base=0, $form_data, $jm=0, $year_id, $userDATA, $temp=0, $bs=0, $course_id, $semester_id, $year, $course, $ng=0, $searchInput, $rgs=0,
            $first_name, $middle_name, $last_name, $birthday, $age, $sex, $address, $status, $usn;

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
            $vv = [];
            $this->userDATA = \App\Models\Studentinfo::all();
//            $ss = \App\Models\Studentinfo::all();
//            $vv[] = $ss;
//            $vv[] = $ff;
//            $this->userDATA = $vv;

        }

        return view('livewire.student-info');
    }

    public function search(){
        $this->resultss = DB::table('studentinfos')
            ->where('first_name','LIKE', '%'.$this->searchInput.'%')
            ->orWhere('last_name','LIKE', '%'.$this->searchInput.'%')
            ->orWhere('middle_name','LIKE', '%'.$this->searchInput.'%')
            ->orWhere('usn','LIKE', '%'.$this->searchInput.'%')
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

    protected $listeners = [
        'delete' => 'destroy',
    ];

    public function destroy($id){
       \App\Models\Studentinfo::find($id)->delete();
    }

    public function submit_reg_student(){
        $validate = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'usn' => ['nullable',Rule::unique('studentinfos','usn')],
            'birthday' => 'nullable',
            'age' => 'nullable',
            'address' => 'nullable',
            'status' => 'nullable',
            'sex' => 'nullable',
            'middle_name' => 'nullable',
        ]);

        try {
            \App\Models\Studentinfo::create($validate);
            session()->flash('dataAdded',"Successfully Added");
            $this->blank();
        }
        catch(\Exception $e){
            session()->flash('dataError',"Failed to Add Student");
        }
    }

    public function blank(){
        $this->first_name = "";
        $this->last_name = "";
        $this->middle_name = "";
        $this->usn = "";
        $this->birthday = "";
        $this->age = "";
        $this->address = "";
        $this->status = "";
        $this->sex = "";
    }

    public function edit($id){
        $data = \App\Models\Studentinfo::find($id);
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->middle_name = $data->middle_name;
        $this->usn = $data->usn;
        $this->birthday = $data->birthday;
        $this->age = $data->age;
        $this->address = $data->address;
        $this->status = $data->status ;
        $this->sex = $data->sex;
    }

    public function submit_edit($id){
        $da = \App\Models\Studentinfo::find($id);

        if ($this->usn == ""){
            $this->usn = 0;
            $validate = $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'usn' => 'integer',
                'birthday' => 'nullable',
                'age' => 'nullable',
                'address' => 'nullable',
                'status' => 'nullable',
                'sex' => 'nullable',
                'middle_name' => 'nullable',
            ]);
        }
        elseif ($da->usn == $this->usn){
            $validate = $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'usn' => 'integer',
                'birthday' => 'nullable',
                'age' => 'nullable',
                'address' => 'nullable',
                'status' => 'nullable',
                'sex' => 'nullable',
                'middle_name' => 'nullable',
            ]);
        }
        else{
            $sn = $da->usn;
            $user = UsnList::where('usn',$da->usn)->get();
            foreach ($user as $users){
                $users->usn = $this->usn;
                $users->save();
            }

            $ub = User::where('username',$sn)->get();
            foreach ($ub as $ubs){
                User::find($ubs->id)->delete();
            }

            $validate = $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'birthday' => 'nullable',
                'usn' => ['integer',Rule::unique('studentinfos','usn')],
                'age' => 'nullable',
                'address' => 'nullable',
                'status' => 'nullable',
                'sex' => 'nullable',
                'middle_name' => 'nullable',
            ]);
        }

        try {
            $data = \App\Models\Studentinfo::find($id);
            $data->first_name = $this->first_name;
            $data->last_name = $this->last_name;
            $data->middle_name =  $this->middle_name;
            $data->usn = $this->usn;
            $data->birthday = $this->birthday;
            $data->age = $this->age;
            $data->address = $this->address;
            $data->status = $this->status;
            $data->sex = $this->sex;
            $data->save();
            session()->flash('good',"Successfully Updated");
            $this->blank();
        }
        catch(\Exception $e){
            session()->flash('bad',"Failed to Update");
        }
    }

}
