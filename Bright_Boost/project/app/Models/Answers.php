<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $table = 'answers';
    protected $fillable = ['Answer_Id', 'Answer_Content', 'Timestamp', 'Question_Id', 'Tutor_Id'];
    use HasFactory;
    // public $connection = 'pms';
}
