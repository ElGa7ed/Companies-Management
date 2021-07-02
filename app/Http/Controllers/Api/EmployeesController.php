<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Traits\GeneralTrait;


class EmployeesController extends Controller
{

    use GeneralTrait;


    public function index()
    {
        $companies = Employee::get();

        if (!$companies)
            return $this->returnError('001', 'هذا الموظف غير موجود');

        return $this->returnData('employee', $employees);
    }
}
