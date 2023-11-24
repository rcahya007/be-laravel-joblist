<?php

namespace App\Http\Controllers;

use App\Models\JobDetails;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs_promo = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.id AS jobs_id',
                'companies.company_name',
                'jobs.job_title',
                'jobs.job_place',
                'jobs.job_salary',
                'job_qualifications.job_qualification',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
                'job_promotion',
            )
            ->where('jobs.job_promotion', '=', 1)
            ->orderBy('jobs.created_at', 'DESC')
            ->take(5)
            ->get();

        $job_s1 = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.id AS jobs_id',
                'companies.company_name',
                'jobs.job_title',
                'jobs.job_place',
                'jobs.job_salary',
                'job_qualifications.job_qualification',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
                'job_promotion',
            )
            ->where('jobs.id_job_qualifications', '=', 4)
            ->orderBy('jobs.created_at', 'DESC')
            ->take(5)
            ->get();

        $job_sales = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.id AS jobs_id',
                'companies.company_name',
                'jobs.job_title',
                'jobs.job_place',
                'jobs.job_salary',
                'job_qualifications.job_qualification',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
                'job_promotion',
            )
            ->where('jobs.id_job_category', '=', 7)
            ->orderBy('jobs.created_at', 'DESC')
            ->take(5)
            ->get();

        $job_staff_resto = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.id AS jobs_id',
                'companies.company_name',
                'jobs.job_title',
                'jobs.job_place',
                'jobs.job_salary',
                'job_qualifications.job_qualification',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
                'job_promotion',
            )
            ->where('jobs.id_job_category', '=', 8)
            ->orderBy('jobs.created_at', 'DESC')
            ->take(5)
            ->get();

        $job_admin = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.id AS jobs_id',
                'companies.company_name',
                'jobs.job_title',
                'jobs.job_place',
                'jobs.job_salary',
                'job_qualifications.job_qualification',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
                'job_promotion',
            )
            ->where('jobs.id_job_category', '=', 1)
            ->orderBy('jobs.created_at', 'DESC')
            ->take(5)
            ->get();

        $job_it = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.id AS jobs_id',
                'companies.company_name',
                'jobs.job_title',
                'jobs.job_place',
                'jobs.job_salary',
                'job_qualifications.job_qualification',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
                'job_promotion',
            )
            ->where('jobs.id_job_category', '=', 4)
            ->orderBy('jobs.created_at', 'DESC')
            ->take(5)
            ->get();

        $job_digital_marketing = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.id AS jobs_id',
                'companies.company_name',
                'jobs.job_title',
                'jobs.job_place',
                'jobs.job_salary',
                'job_qualifications.job_qualification',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
                'job_promotion',
            )
            ->where('jobs.id_job_category', '=', 3)
            ->orderBy('jobs.created_at', 'DESC')
            ->take(5)
            ->get();

        return response()->json([
            'jobs_promo' => $jobs_promo,
            'jobs_s1' => $job_s1,
            'jobs_sales' => $job_sales,
            'jobs_staff_resto' => $job_staff_resto,
            'jobs_admin' => $job_admin,
            'jobs_it' => $job_it,
            'job_digital_marketing' => $job_digital_marketing

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobs = Jobs::create([
            'id_company' => $request->id_company,
            'id_job_category' => $request->id_job_category,
            'id_job_qualifications' => $request->id_job_qualifications,
            'job_title' => $request->job_title,
            'job_place' => $request->job_place,
            'job_salary' => $request->job_salary,
            'job_promotion' => $request->job_promotion,
        ]);
        $job_detail = JobDetails::create([
            'id_job' => $jobs->id,
            'intro_job_desc' => $request->intro_job_desc,
            'job_desc' => $request->job_desc,
            'job_weekday' => $request->job_weekday,
            'job_time' => $request->job_time,
            'job_requirements' => $request->job_requirements,
            'job_type_condition' => $request->job_type_condition,
            'job_criteria' => $request->job_criteria,
            'job_level' => $request->job_level,
            'job_experience' => $request->job_experience,
            'job_spesialis' => $request->job_spesialis,
        ]);
        return response()->json([
            'data' => $jobs,
            'detail_job' => $job_detail,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show($job)
    {

        $job_detail = DB::table('jobs')
            ->join('companies', 'jobs.id_company', '=', 'companies.id')
            ->join('job_details', 'jobs.id', '=', 'job_details.id_job')
            ->join('job_categories', 'jobs.id_job_category', '=', 'job_categories.id')
            ->join('job_qualifications', 'jobs.id_job_qualifications', '=', 'job_qualifications.id')
            ->select(
                'jobs.*',
                'job_details.*',
                'companies.*',
                'job_categories.*',
                'job_qualifications.*',
                'jobs.created_at AS create_job_date',
                'jobs.updated_at AS update_job_date',
            )
            ->where('jobs.id', $job)
            ->get();
        return response()->json([
            'data' => $job_detail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        $jobs->id_company = $request->id_company;
        $jobs->job_title = $request->job_title;
        $jobs->job_requirements = $request->job_requirements;
        $jobs->job_place = $request->job_place;
        $jobs->job_type_condition = $request->job_type_condition;
        $jobs->job_salary = $request->job_salary;
        $jobs->job_promotion = $request->job_promotion;
        $jobs->save();
        return response()->json([
            'data' => $jobs,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs)
    {
        $jobs->delete();
        return response()->json([
            'massage' => 'job deleted',
        ]);
    }
}
