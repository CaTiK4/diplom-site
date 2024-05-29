<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function edicationgOrganization()
    {
        return $this->belongsTo(EdicationgOrganization::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function courseOfStudy()
    {
        return $this->belongsTo(CourseOfStudy::class);
    }

    public function disability()
    {
        return $this->belongsTo(Disability::class);
    }
    // public function getFullName() {
    //     return ucfirst($this->Surname) . ' ' . ucfirst($this->Name) . ' ' . ucfirst($this->Patronymic);
    // }

    protected $fillable = [
        'Name',
        'Surname',
        'Patronymic',
        'DateOfBirth',
        'edicationg_organization_id ',
        'speciality_id ',
        'course_of_study_id ',
    ];
}
