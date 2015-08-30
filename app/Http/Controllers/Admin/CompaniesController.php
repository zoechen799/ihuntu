<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Company;
use App\CompanySize;
use App\CompanyNature;

use Redirect, Input, Auth;

class CompaniesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	   return view('admin.companies.create')->with("companysize", CompanySize::all())
                ->with("companynature", CompanyNature::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
            $this->validate($request, [
                    'title' => 'required|unique:companies|max:60',
                    'description' => 'required'
            ]);

            $company = new Company;
            $company->title = Input::get('title');
            $company->description = Input::get('description');
            $company->company_size_id = Input::get('companysize');
            $company->company_type_id = Input::get('companynature');
            $company->address = Input::get('address');

            if ($company->save()) {
                    return Redirect::to('admin');
            } else {
                    return Redirect::back()->withInput()->withErrors('保存失败！');
            }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            return view('admin.companies.edit')->with("company", Company::find($id))
                    ->with("companysize", CompanySize::all())
                    ->with("companynature", CompanyNature::all());;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
            $this->validate($request, [
                    'title' => 'required|unique:companies,title,'.$id.'|max:255'
            ]);

            $company = Company::find($id);
            $company->title = Input::get('title');
            $company->description = Input::get('description');
            $company->address = Input::get('address');
            $company->company_size_id = Input::get('companysize');
            $company->company_type_id = Input::get('companynature');
            
            if ($company->save()) {
                    return Redirect::to('admin');
            } else {
                    return Redirect::back()->withInput()->withErrors('保存失败！');
            }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $company = Company::find($id);
            $company->delete();
            return Redirect::to('admin');
	}

}
