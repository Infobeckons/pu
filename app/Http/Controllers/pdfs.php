<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use PDF ;

class pdfs extends Controller
{
      public function showEmployees(){
        $employee = Employee::all();
        return view('test', ['emp'=>$employee]);
      }
       // Generate PDF
    public function createPDF() {
      // retreive all records from db
      $data = Employee::all();

      // share data to view
      view()->share('employee',compact('data'));
      $pdf = PDF::loadView('pan', compact('data'));

      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
}

