<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';  // Table name
    protected $primaryKey = 'id';    // Primary key
    protected $fillable = ['name', 'address', 'mobile', 'gender', 'index', 'photo', 'qr_code'];  // Fields that can be mass-assigned
    use HasFactory;  // Enables Laravel factories for model testing/creating fake records
}
