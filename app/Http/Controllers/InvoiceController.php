<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Student;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function show($id)
    {
        $student = Student::find($id);

        return view('invoices.index', compact('student'));
    }
}
