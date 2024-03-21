<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showSupervis(Request $request)
    {
        $supervisor = \App\Models\Supervisor::all();

        return view('supervisors',['supervisorList'=>$supervisor]  );
    }
    public function showSupervisor(Request $request, \App\Models\Employee $employee)
    {
        $dataEmployee = $employee->dataEmployee;
     //    dd($dataEmployee->toArray());
        return view('supervisors',
            [
                'employee' => $employee  ,
                'supervisorList' => $dataEmployee

            ]);
    }


    public function SupervisorTest(Request $request, $id)
    {
    $employee = \App\Models\Employee::find($id);
    $animals = [];
    foreach ($employee->TestAnimals as $animal) {
        $animals[] = $animal->name;
    }

    return view('supervisors', [ 'employee' => $employee,'animals'=>$animals]);

}


}
