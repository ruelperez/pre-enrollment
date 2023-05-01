<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\FillUp;
use App\Models\Semester;
use App\Models\StudentSubject;
use App\Models\Yearlevel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Dompdf\Adapter\PDFLib;

class PdfController extends Controller
{
    public function pdf($user_id,$year_id,$course_id,$sem_id){
        $f=0;
        $fill = FillUp::all();
        foreach ($fill as $fil){
            if ($fil->user_id == $user_id and $fil->yearlevel_id == $year_id and $fil->course_id == $course_id and $fil->semester_id == $sem_id){
                $fill_id = $fil->id;
                $f=1;
            }
        }
        if ($f == 1){
            $st = StudentSubject::all();
//            foreach ($st as $s){
//                if ($s->user_id == $user_id and $s->yearlevel_id == $year_id and $s->course_id == $course_id and $s->semester_id == $sem_id){
//
//                }
//            }

            $fill_data = FillUp::find($fill_id);
            $course = Course::find($fill_data->course_id);
            $level = Yearlevel::find($fill_data->yearlevel_id);
            $sem = Semester::find($fill_data->semester_id);
            $data = [
              'student_number' => $fill_data->student_number,
              'fname' => $fill_data->first_name,
              'lname' => $fill_data->last_name,
                'mname' => $fill_data->middle_name,
                'user_id' => $fill_data->user_id,
                'course' => $course->name,
                'year' => $level->level,
                'sem' => $sem->sem,
                'class' => $fill_data->student_class,
                'start' => $fill_data->school_year_start,
                'end' => $fill_data->school_year_end,
                'address' => $fill_data->address,
                'guardian' => $fill_data->guardian,
                'contact' => $fill_data->contact_number,
                'birthdate' => $fill_data->birthdate,
                'birthplace' => $fill_data->birthplace,
                'sex' => $fill_data->sex,
            ];
            $pdf = PDF::loadView('form', compact('data', 'st'))
                ->setPaper('legal','portrait');
//            $pdf->setOptions([
//                'margin_top' => 1,
////                'margin_right' => 10,
////                'margin_bottom' => 20,
////                'margin_left' => 10,
//            ]);
            return $pdf->stream('load.pdf');
        }
        else{
            return;
        }


    }
}
