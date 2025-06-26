<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'medical_records';

    // Fields that are mass-assignable
    protected $fillable = [
        'full_name',
        'age',
        'contact',
        'medical_history',
        'doctor',
        'image', 
    ];
}