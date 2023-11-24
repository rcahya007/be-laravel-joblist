<?php

namespace Database\Seeders;

use App\Models\JobQualification;
use Illuminate\Database\Seeder;

class JobQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobQualification::create([
            "job_qualification" => 'SMP/MTS'
        ]);
        JobQualification::create([
            "job_qualification" => 'SMA/SMK/MA'
        ]);
        JobQualification::create([
            "job_qualification" => 'D3'
        ]);
        JobQualification::create([
            "job_qualification" => 'S1'
        ]);
        JobQualification::create([
            "job_qualification" => 'S2'
        ]);
        JobQualification::create([
            "job_qualification" => 'S3'
        ]);
        JobQualification::create([
            "job_qualification" => 'Tidak Ada Ketentuan'
        ]);
    }
}
