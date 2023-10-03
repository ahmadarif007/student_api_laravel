<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use DB;

class StudentController extends Controller
{
    public function index()
    {
        // $student = Student::all(); // Eloquent
        $student = DB::table('students')->get(); //Query Builder
        return view('dashboard', ['student'=> $student]);
    }
}
