<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdicationgOrganization extends Model
{
    use HasFactory;

    public function Student(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    protected $fillable = [
        'Title',
    ];
}
