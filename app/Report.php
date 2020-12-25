<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['school', 'semestr', 'students_five', 'students_four', 'students_three', 'students_two', 'kpy', 'py', 'ca', 'procent_five', 'procent_four', 'procent_three', 'procent_two',];
}
