<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessiondetails extends Model
{
    protected $table = 'session_details';
    protected $fillable = ['Session_Id', 'Session_Name', 'Session_Day', 'Session_Start', 'Session_End'];
    use HasFactory;
    // public $connection = 'pms';
}
