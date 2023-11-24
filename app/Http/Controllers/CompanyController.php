<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $company = Company::paginate(10);
        $company = Company::all();
        return response()->json([
            'data' => $company,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = Company::create([
            'company_name' => $request->company_name,
            'company_about' => $request->company_about,
            'company_no' => $request->company_no,
            'company_size' => $request->company_size,
            'company_time_acc' => $request->company_time_acc,
            'company_category' => $request->company_category,
            'company_additional' => $request->company_additional,
            'company_place' => $request->company_place,
        ]);
        return response()->json([
            'data' => $company,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return response()->json([
            'data' => $company,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->company_name = $request->company_name;
        $company->company_about = $request->company_about;
        $company->company_no = $request->company_no;
        $company->company_size = $request->company_size;
        $company->company_time_acc = $request->company_time_acc;
        $company->company_category = $request->company_category;
        $company->company_additional = $request->company_additional;
        $company->company_place = $request->company_place;
        $company->save();
        return response()->json([
            'data' => $company,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json([
            'massage' => 'company Deleted',
        ]);
    }
}
