<?php

namespace App\Http\Livewire;

use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class FormComponent extends Component
{
    public $name;
    public $email;


    public function render()
    {
        return view('livewire.form-component');
    }

    public function generate()
    {
        $data = [
            'name'  => $this->name,
            'email' => $this->email,
        ];

        $html = view('pdf.form')->render();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView($html);
        return $pdf->download('form.pdf');

//        $pdf = PDF::loadHTML('pdf.form', $data);

//        return $pdf->download('form.pdf');
    }
}
