<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() 
    {
        $data = Students::all();
        // return view('students.index', $data);  
        return view('students.index', ['students' => $data]);
    }
};
