<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'gender', 'index','photo', 'qr_code'];
    use HasFactory;
}
