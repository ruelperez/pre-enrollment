<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function showImportForm()
    {
        return view('import');
    }

    public function import(Request $request)
    {
        $file = $request->file('excel_file');

        Excel::import(new MyExcelImport(), $file);

        // Handle the imported data

        return redirect()->back()->with('success', 'Excel file imported successfully.');
    }
}
