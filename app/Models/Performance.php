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
        'project_name',
        'project_into',
        'unit1',
        'unit2',
        'unit3',
        'unit4',
        'unit5',
        'unit6',
        'project_all_name',
    ];
}
