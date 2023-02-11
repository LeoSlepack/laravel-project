<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [

        'num_correct_answers'
        
    ];

    protected $attributes = [

        'num_correct_answers' => 1

    ];
}
