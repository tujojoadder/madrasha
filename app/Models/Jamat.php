<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamat extends Model
{
      use HasFactory;

     protected $fillable = [
        'jamat_name',
    ];
}
