<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobCategory = JobCategory::all();
        return response()->json([
            'data' => $jobCategory,
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
        $jobCategory = JobCategory::create([
            'job_category' => $request->job_category,
        ]);
        return response()->json([
            'data' => $jobCategory,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function show(JobCategory $jobCategory)
    {
        return response()->json([
            'data' => $jobCategory,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(JobCategory $jobCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobCategory $jobCategory)
    {
        $jobCategory->job_category = $request->job_category;
        $jobCategory->save();
        return response()->json([
            'data' => $jobCategory,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobCategory $jobCategory)
    {
        $jobCategory->delete();
        return response()->json([
            'massage' => 'Job Category Deleted',
        ]);
    }
}
