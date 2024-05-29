<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    protected $fillable = [
        'Title',
    ];
}
