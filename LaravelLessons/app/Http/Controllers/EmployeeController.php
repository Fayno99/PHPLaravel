<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showSupervis(Request $request)
    {
        $supervisor = \App\Models\supervisor::all();

        return view('supervisors',['supervisorList'=>$supervisor]  );
    }
    public function showSupervisor(Request $request, \App\Models\employee $employee)
    {
        $dataEmployee = $employee->dataEmployee;
     //    dd($dataEmployee->toArray());
        return view('supervisors',
            [
                'employee' => $employee  ,
                'supervisorList' => $dataEmployee

            ]);
    }
}
