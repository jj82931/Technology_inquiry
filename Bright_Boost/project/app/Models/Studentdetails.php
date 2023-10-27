<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentdetails extends Model
{
    protected $table = 'student_details';
    protected $fillable = ['id', 'stu_num', 'user_name', 'email_id', 'password', 'school_name', 'subscription_plan_from','subscription_plan_to'];
    use HasFactory;
    // public $connection = 'pms';
}
