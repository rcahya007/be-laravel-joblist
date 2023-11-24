<?php

namespace App\Http\Controllers;

use App\Models\JobQualification;
use Illuminate\Http\Request;

class JobQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobQualification = JobQualification::all();
        return response()->json([
            'data' => $jobQualification,
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
        $jobQualification = JobQualification::create([
            'job_qualification' => $request->job_qualification
        ]);
        return response()->json([
            'data' => $jobQualification,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobQualification  $jobQualification
     * @return \Illuminate\Http\Response
     */
    public function show(JobQualification $jobQualification)
    {
        return response()->json([
            'data' => $jobQualification,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobQualification  $jobQualification
     * @return \Illuminate\Http\Response
     */
    public function edit(JobQualification $jobQualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobQualification  $jobQualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobQualification $jobQualification)
    {
        $jobQualification->job_qualification = $request->job_qualification;
        $jobQualification->save();

        return response()->json([
            'data' => $jobQualification,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobQualification  $jobQualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobQualification $jobQualification)
    {
        $jobQualification->delete();
        return response()->json([
            'massage' => 'Job Qualification Deleted',
        ]);
    }
}
