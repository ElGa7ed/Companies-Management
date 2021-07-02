<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Traits\GeneralTrait;

class CompaniesController extends Controller
{

    use GeneralTrait;


    public function index()
    {
        $companies = Company::get();

        if (!$companies)
            return $this->returnError('001', 'هذه الشركة غير موجودة');

        return $this->returnData('company', $companies);
    }
}
