<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    use HasFactory;

    public function illness()
    {
        return $this->belongsTo(Illness::class);
    }

    public function typeOfHealth()
    {
        return $this->belongsTo(TypeOfHealth::class);
    }

    public function disabilityGroup()
    {
        return $this->belongsTo(DisabilityGroup::class);
    }

    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

    protected $fillable = [
        'student_id',
        'Illness_id',
        'type_of_health_id',
        'disability_group_id',
    ];
}
