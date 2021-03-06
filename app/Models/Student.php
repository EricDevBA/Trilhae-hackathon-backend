<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = ['full_name', 'course', 'address', 'email', 'phone_number'];
}
