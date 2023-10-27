<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessionstudents extends Model
{
    protected $table = 'session_student';
    protected $fillable = ['student_id', 'session_id', 'session_name', 'status', 'entry_date', 'entry_time'];
    use HasFactory;
    // public $connection = 'pms';
}
