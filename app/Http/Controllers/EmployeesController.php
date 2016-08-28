<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests;

class EmployeesController extends Controller
{
    public function index()
    {
    	$employees = Employee::all();
    	return view('employees.index')->with(compact('employees'));
    }

    public function create()
    {
    	return view('employees.new');
    }

    public function store(Request $request){
    	return $request->all();
    }
}
