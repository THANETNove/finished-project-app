<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'image',
        'std_class',
        'std_major',
        'std_typesubject',
        'term',
        'std_year',
        'project_name',
        'keyword_name',
        'project_into',
        'unit1',
        'unit2',
        'unit3',
        'unit4',
        'unit5',
        'unit6',
        'project_all',
        'person_name_1',
        'person_name_2',
        'person_name_3',
        'person_name_4',
        'person_name_5',
        'person_name_6',
        'person_name_7',
        'person_name_8',
    ];
}
