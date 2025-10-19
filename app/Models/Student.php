<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use HasFactory,SoftDeletes;
     // Mass assignable fields
    protected $fillable = [
        'name',
        'birth_day',
        'blood_group',
        'father_name',
        'mother_name',
        'father_profesion',
        'parents_phone',
        'relation',
        'emaisl',
        'current_address',
        'permanent_address',
        'admission_date',
        'form_number',
        'admission_number',
        'coursefee',
        'jamat_id',
        'meal_type',
        'residential',
        'student_type',
        'etim',
        'bording_food',
        'food_bill',
        'note',
        'created_by',
        'updated_by',
        'manage_by',
        'prepared_by'
    ];


    // Casts
    protected $casts = [
        'admission_date' => 'date',
        'form_number' => 'integer',
        'admission_number' => 'integer',
        'coursefee' => 'decimal:2',
        'meal_type' => 'integer',
        'residential' => 'integer',
        'student_type' => 'integer',
        'etim' => 'integer',
        'bording_food' => 'integer',
        'food_bill' => 'decimal:2',
    ];

    
}
