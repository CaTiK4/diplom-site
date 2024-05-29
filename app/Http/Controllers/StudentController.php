<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\EdicationgOrganization;
use App\Models\Speciality;
use App\Models\CourseOfStudy;
use Illuminate\Http\Request;
use App\Http\Requests\StudentStoreRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        // dd($students);
        return view('Info-Students.index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edicationgOrganizations = EdicationgOrganization::all();
        $specialities = Speciality::all();
        $coursesOfStudy = CourseOfStudy::all();
        // dd($coursesOfStudy);
        return view('Info-Students.create', compact('edicationgOrganizations','specialities','coursesOfStudy'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {
        // dd($request);
        Student::create([
        'Name' => $request->name,
        'Surname' => $request->surname,
        'Patronymic' => $request->patronymic,
        'DateOfBirth' => $request->dateOfBirth,
        'edicationg_organization_id' => $request->edicationgOrganization,
        'speciality_id' => $request->speciality,
        'course_of_study_id' => $request->courseOfStudy,
        ]);
        return to_route('Info-Students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
