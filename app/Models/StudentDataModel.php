<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDataModel extends Model
{
    use HasFactory;

    protected $database = "Student_data";

    protected $fillable = [
        "id","name"
    ];

}