<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\JobCategory;
use App\Models\JobDetails;
use App\Models\Jobs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CompanySeeder::class,
            JobCategorySeeder::class,
            JobQualificationSeeder::class,
            JobsSeeder::class,
            JobDetailsSeeder::class,
        ]);
    }
}
