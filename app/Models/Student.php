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
        'photo',
        'birth_day',
        'blood_group_id',
        'father_name',
        'mother_name',
        'father_profesion',
        'parents_phone',
        'relation',
        'email',
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

      public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    /**
     * Get the jamat (class) that owns the student.
     */
    public function jamat()
    {
        return $this->belongsTo(Jamat::class);
    }
    
}
