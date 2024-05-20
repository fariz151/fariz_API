<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function ShowAllEmployee()
    {
        return response()->json(Employee::all());
    }

   
}