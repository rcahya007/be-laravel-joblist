<?php

namespace Database\Seeders;

use App\Models\Jobs;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobs::create([
            "id_company" => 1,
            "id_job_category" => 4,
            "id_job_qualifications" => 4,
            "job_title" => "Staff IT",
            "job_place" => "Kota Surabaya, Jawa Timur",
            "job_salary" => 6000000,
            "job_promotion" => false,
        ]);
        Jobs::create([
            "id_company" => 4,
            "id_job_category" => 1,
            "id_job_qualifications" => 3,
            "job_title" => "ADMIN ACCOUNTING MANYAR",
            "job_place" => "Kabupaten Gresik, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => true,
        ]);
        Jobs::create([
            "id_company" => 5,
            "id_job_category" => 4,
            "id_job_qualifications" => 4,
            "job_title" => "Junior IT",
            "job_place" => "Kota Surabaya, Jawa Timur",
            "job_salary" => 6500000,
            "job_promotion" => false,
        ]);
        Jobs::create([
            "id_company" => 6,
            "id_job_category" => 7,
            "id_job_qualifications" => 4,
            "job_title" => "Sales Proyek",
            "job_place" => "Kota Surabaya, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => true,
        ]);
        Jobs::create([
            "id_company" => 6,
            "id_job_category" => 7,
            "id_job_qualifications" => 2,
            "job_title" => "Sales Promotion (SPG/SPB)",
            "job_place" => "Kota Surabaya, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => false,
        ]);
        Jobs::create([
            "id_company" => 7,
            "id_job_category" => 7,
            "id_job_qualifications" => 2,
            "job_title" => "Sales Retail penempatan Malang",
            "job_place" => "Kota Malang, Jawa Timur",
            "job_salary" => 3100000,
            "job_promotion" => true,
        ]);
        Jobs::create([
            "id_company" => 7,
            "id_job_category" => 7,
            "id_job_qualifications" => 3,
            "job_title" => "Direct Sales Wifi/Area Coordinator Bali",
            "job_place" => "Kota Denpasar, Bali",
            "job_salary" => 3400000,
            "job_promotion" => true,
        ]);
        Jobs::create([
            "id_company" => 8,
            "id_job_category" => 8,
            "id_job_qualifications" => 1,
            "job_title" => "KOKI/TUKANG MASAK",
            "job_place" => "Kota Surabaya, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => true,
        ]);
        Jobs::create([
            "id_company" => 8,
            "id_job_category" => 8,
            "id_job_qualifications" => 1,
            "job_title" => "penjaga toko, waiters dan kasir",
            "job_place" => "Kota Malang, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => false,
        ]);
        Jobs::create([
            "id_company" => 8,
            "id_job_category" => 8,
            "id_job_qualifications" => 1,
            "job_title" => "CHEF / KOKI / TUKANG MASAK",
            "job_place" => "Kota Malang, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => false,
        ]);
        Jobs::create([
            "id_company" => 8,
            "id_job_category" => 8,
            "id_job_qualifications" => 1,
            "job_title" => "PEMBUAT KUE BASAH",
            "job_place" => "Kota Malang, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => false,
        ]);
        Jobs::create([
            "id_company" => 8,
            "id_job_category" => 8,
            "id_job_qualifications" => 1,
            "job_title" => "COOK HELPER / KITCHEN CREW",
            "job_place" => "Kota Malang, Jawa Timur",
            "job_salary" => 0,
            "job_promotion" => false,
        ]);
        Jobs::create([
            "id_company" => 9,
            "id_job_category" => 3,
            "id_job_qualifications" => 4,
            "job_title" => "Content Creator (Cabang Semarang)",
            "job_place" => "Kota Semarang, Jawa Tengah",
            "job_salary" => 3500000,
            "job_promotion" => true,
        ]);
        Jobs::create([
            "id_company" => 9,
            "id_job_category" => 3,
            "id_job_qualifications" => 4,
            "job_title" => "Content Creator ( Cabang Surabaya)",
            "job_place" => "Kota Surabaya, Jawa Timur",
            "job_salary" => 4800000,
            "job_promotion" => true,
        ]);
    }
}
