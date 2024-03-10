<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // CREATE A EMPLOYEE
    public function create(Request $request){
        $name = $request->name;
        $age = $request->age;
        $city = $request->city;

        $emp = new Employee();
        $emp->name = $name;
        $emp->age = $age;
        $emp->city = $city;
        $emp->save();

        return response()->json(['status' => true, 'message' => 'Employee Created']);
    }


    // UPDATE A EMPLOYEE
    public function update(Request $request){
        $employee = Employee::find($request->id);

        if($employee){
            $name = $request->name;
            $age = $request->age;
            $city = $request->city;

            $employee->name = $name;
            $employee->age = $age;
            $employee->city = $city;
            $employee->update();

            return response()->json(['status' => true, 'message' => 'Employee Updated']);
        }
    }


    // DELETE A EMPLOYEE
    public function delete(Request $request){
        $employee = Employee::find($request->id);

        if($employee){
            $employee->delete();

            return response()->json(['status' => true, 'message' => 'Employee Deleted']);
        }
    }
}
