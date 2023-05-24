<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CsvImportController extends Controller
{
    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048'
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Open the file for reading
        $handle = fopen($file, 'r');

        // Loop through each row in the CSV file
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            // Insert the data into the database
            DB::table('usn_lists')->insert(array(
                'id' => $data[0],
                'fname' => $data[1],
                'lname' => $data[2],
                // ...
            ));
        }

        // Close the file handle
        fclose($handle);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'CSV file imported successfully!');
    }
}
