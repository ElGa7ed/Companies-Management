<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use DB;


class EmployeeController extends Controller
{
    
    public function index()
    {
        $employees = Employee::selection()->paginate(PAGINATION_COUNT);
        return view('dashboard.employees.index', compact('employees'));
    }


    public function create()
    {

        $companies = Company::selection()->get();
        return view('dashboard.employees.create', compact('companies'));
    }


    public function store(EmployeeRequest $request)
    {
        try {

            DB::beginTransaction();
            $employee = Employee::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'company_id' => $request->company_id,
                'phone' => $request->phone,
                
            ]);
            DB::commit();
            return redirect()->route('dashboard.employees')->with(['success' => 'تم حفظ الموظف بنجاح']);
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('dashboard.employees')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }





    public function edit( $id)
    {
        $employee = Employee::select()->find($id);
        if (!$employee) {
            return redirect()->route('dashboard.employees')->with(['error' => 'هذا الموظف غير موجود']);
        }
        $companies = Company::selection()->get();

        return view('dashboard.employees.edit', compact('employee','companies'));
    }


    public function update($id, EmployeeRequest $request)
    {

        try {
            $employee = Employee::find($id);
            if (!$employee) {
                return redirect()->route('dashboard.employees.edit', $id)->with(['error' => 'هذا الموظف غير موجود']);
            }

            $employee->update($request->except('_token'));

            return redirect()->route('dashboard.employees')->with(['success' => 'تم تحديث الموظف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('dashboard.employees')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $employee = Employee::find($id);
            if (!$employee) {
                return redirect()->route('dashboard.employees', $id)->with(['error' => 'هذا الموظف غير موجود']);
            }
            $employee->delete();

            return redirect()->route('dashboard.employees')->with(['success' => 'تم حذف الموظف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('dashboard.employees')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
