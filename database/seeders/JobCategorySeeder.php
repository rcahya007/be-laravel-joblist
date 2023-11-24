<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Seeder;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobCategory::create([
            "job_category" => 'Admin',
        ]);
        JobCategory::create([
            "job_category" => 'Butuh Segera',
        ]);
        JobCategory::create([
            "job_category" => 'Digital Marketing',
        ]);
        JobCategory::create([
            "job_category" => 'IT',
        ]);
        JobCategory::create([
            "job_category" => 'Pilihan',
        ]);
        JobCategory::create([
            "job_category" => 'S1',
        ]);
        JobCategory::create([
            "job_category" => 'Sales',
        ]);
        JobCategory::create([
            "job_category" => 'Staff Restoran',
        ]);
    }
}
