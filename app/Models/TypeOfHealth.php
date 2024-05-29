<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfHealth extends Model
{
    use HasFactory;

    public function disability(): HasMany
    {
        return $this->hasMany(Disability::class);
    }

    protected $fillable = [
        'Title',
    ];
}
