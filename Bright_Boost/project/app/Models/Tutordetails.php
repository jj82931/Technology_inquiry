<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutordetails extends Model
{
    protected $table = 'tutor_details';
    protected $fillable = ['tutor_id', 'user_name', 'email_id', 'password', 'subject_id'];
    use HasFactory;
    // public $connection = 'pms';
}
