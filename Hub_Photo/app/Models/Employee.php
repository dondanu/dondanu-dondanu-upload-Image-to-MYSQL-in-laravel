<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';  // Specify the table name
    protected $primarykey = 'id';    // Corrected property name (capital 'K')
    protected $fillable = ['name', 'address', 'mobile', 'gender', 'index', 'photo', 'qr_code'];  // Fields that can be mass-assigned
    use HasFactory;  // Enables factory features in Laravel
}
