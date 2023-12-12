<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = ['evaluation_num', 'evaluation_name', 'grade', 'image_url', 'status', 'subject_id'];
}
