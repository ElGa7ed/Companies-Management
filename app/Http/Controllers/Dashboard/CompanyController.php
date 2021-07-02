<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use DB;

class CompanyController extends Controller
{
    
    public function index()
    {
        $companies = Company::selection()->paginate(PAGINATION_COUNT);
        return view('dashboard.companies.index', compact('companies'));
    }


    public function create()
    {

        return view('dashboard.companies.create');
    }


    public function store(CompanyRequest $request)
    {
        try {

           
            DB::beginTransaction();

            $filePath = "";
            if ($request->has('logo')) {
                $filePath = uploadImage('logos', $request->logo);
            }
            
            $company = Company::create([
                'name' => $request->name,
                'email' => $request->email,
                'logo' => $filePath,  
            ]);

            DB::commit();

            return redirect()->route('dashboard.companies')->with(['success' => 'تم حفظ الموظف بنجاح']);
        } catch (\Exception $ex) {
            return $ex;
            DB::rollback();

            return redirect()->route('dashboard.companies')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }





    public function edit( $id)
    {
        $company = Company::select()->find($id);
        if (!$company) {
            return redirect()->route('dashboard.companies')->with(['error' => 'هذه الشركة غير موجوده']);
        }

        return view('dashboard.companies.edit', compact('company'));
    }


    public function update($id, CompanyRequest $request)
    {

        try {
            $company = Company::find($id);
            if (!$company) {
                return redirect()->route('dashboard.companies.edit', $id)->with(['error' => 'هذه الشركة غير موجوده']);
            }

            DB::beginTransaction();
            //photo
            if ($request->has('logo') ) {
                 $filePath = uploadImage('logos', $request->logo);
                 Company::where('id', $id)
                    ->update([
                        'logo' => $filePath,
                    ]);
            }

            $data = $request->except('_token', 'id', 'logo');
            Company::where('id', $id)
                ->update(
                    $data
                );

            DB::commit();


            return redirect()->route('dashboard.companies')->with(['success' => 'تم تحديث بيانات الشركة بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.companies')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $company = Company::find($id);
            if (!$company) {
                return redirect()->route('dashboard.companies', $id)->with(['error' => 'هذه الشركة غير موجوده']);
            }

            $company->delete();

            return redirect()->route('dashboard.companies')->with(['success' => 'تم حذف الشركة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('dashboard.companies')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
