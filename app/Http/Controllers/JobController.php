<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class JobController extends Controller
{
    public function index()
    {
        $students = Student::all();
        // dd($students);
        return view('Job.index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

}