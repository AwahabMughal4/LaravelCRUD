<?php

namespace App\Models;
use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    // protected $primaryKey = 'id';
    protected $fillable = [];
    
}
