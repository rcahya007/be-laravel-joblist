<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Company::factory()->count(10)->create();
        Company::create(
            [
                'company_name' => 'PT. Java Vapor Indonesia',
                'company_about' => 'PT. Java Vapor Indonesia merupakan Perusahaan yang bergerak di bidang produksi dan distribusi liquid di Indonesia dan Internasional berlokasi di Kota Surabaya Berdiri sejak tahun 2016 dengan brand Indonesia Dream Juice.',
                'company_no' => '1',
                'company_size' => '50-250 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Manufaktur dan Produksi',
                'company_additional' => 'https://instagram.com/idjofficial',
                'company_place' => 'Jl. Medokan Keputih Jl. Medokan Semampir No.3, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111',
            ],
        );
        Company::create(
            [
                'company_name' => 'Clarice Beauty Clinic',
                'company_about' => 'Clarice Beauty merupakan perusahaan di bidang kecantikan, didirikan pada tahun 2013. Clarice Beauty sendiri memiliki makna dari bahasa latin “Clarus” yang artinya Clear (Bersih), Bright (Cerah) & Famous (Terkenal). Visi : Menjadi Solusi Kulit Sehat dan Bercahaya Menjadi Perusahaan Kecantikan Yang Terdepan dan Serta Mampu Berkontribusi Untuk Menyejahterakan Bangsa Indonesia Misi : Memberikan Pelayanan Yang Terbaik Selalu di Dukung Oleh Sumber Daya Manusia Yang Professional Fasilitas Yang Modern dan Mutakhir Menyediakan Produk Skincare Yang Aman dan Berkualitas',
                'company_no' => '2',
                'company_size' => '251-500 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Kosmetik & Kecantikan',
                'company_additional' => 'https://id.linkedin.com/company/clarice-beauty-mojokerto',
                'company_place' => 'Jl. R.A Basuni No.34, Mergelo, Sooko, Kec. Sooko, Kota Mojokerto, Jawa Timur 61361',
            ],
        );
        Company::create(
            [
                'company_name' => 'PT Shelter Indonesia',
                'company_about' => 'PT Shelter Indonesia adalah Perusahaan outsourcing berpengalaman dan profesional yang berdiri sejak tahun 2002 dengan memberikan berbagai pelayanan seperti layanan keamanan, kebersihan dan kebutuhan karyawan lainnya.',
                'company_no' => '3',
                'company_size' => '50-250 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Outsourcing',
                'company_additional' => 'https://hris.shelterapp2.co.id/auth/login',
                'company_place' => 'Rukan Victorian Bintaro DD No. 7, Jl. Bintaro Utama Raya Sektor 3A, Pondok Karya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15225',
            ],
        );
        Company::create(
            [
                'company_name' => 'PT Harmony Pilar Sentosa',
                'company_about' => 'PT. Harmony Pilar Sentosa adalah salah satu perusahaan yang berinvovasi dalam produk Cool Box, Road Barrier, Traffic Cone, Safety Jalan dan lain sebagainya. Kami juga memproduksi sesuai dengan desain dan spesifikasi yang dibutuhkan oleh klien kami untuk memenuhi tuntutan pasar global.',
                'company_no' => '4',
                'company_size' => '501-1000 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Lainnya',
                'company_additional' => 'https://tanaga.id/',
                'company_place' => 'Jl. Raya Bumi Maspion I Blok C-2, Romokalisari, Kec. Benowo, Kota SBY, Jawa Timur 60192',
            ],
        );
        Company::create(
            [
                'company_name' => 'PT Gear Inc Services Indonesia',
                'company_about' => 'Gear Inc. is a global software specialist with the main focus on Game Development, Quality Assurance, and Image & Content Moderation. This Silicon Valley owned company has its main base in Hanoi, Vietnam, and offices in Danang, Vietnam, the US, the Philippines, India, Thailand, and Indonesia.',
                'company_no' => '5',
                'company_size' => '501-1000 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Outsourcing',
                'company_additional' => 'http://www.gearinc.com/',
                'company_place' => 'Jl. Mayjen HR. Muhammad No.31, Sonokwijenan, Kec. Sukomanunggal, Kota SBY, Jawa Timur 60189',
            ],
        );
        Company::create(
            [
                'company_name' => 'PT Nicko Nusa Trade',
                'company_about' => 'PT. Nicko Nusa Trade adalah sebuah perusahaan yang bergerak di bidang pengadaan building material, terutama door dan window accessories, baik untuk pintu kayu, kaca, maupun aluminium dan juga pengadaan kebutuhan sanitary.',
                'company_no' => '6',
                'company_size' => '50-250 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Retail',
                'company_additional' => 'https://nickonusa.co.id/',
                'company_place' => 'Ruko Villa Bukit Mas RC.01, Jl. Villa Bukit Mas, Dukuh Pakis, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60225',
            ],
        );
        Company::create(
            [
                'company_name' => 'PT Duta Generasi Mandiri',
                'company_about' => 'PT Duta Generasi Mandiri atau DutaGM adalah perusahaan yang bergerak di bidang alih daya atau lebih dikenal dengan outsourcing, penyedia tenaga kerja dan promotion service. DutaGM didirikan tahun 2014 awal dan dikelola secara profesional oleh para pengurus yang berpengalaman di bidangnya.',
                'company_no' => '7',
                'company_size' => '50-250 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Outsourcing',
                'company_additional' => 'https://dutagm.com/',
                'company_place' => 'Jalan Radio Dalam Raya No.F3 5 4, RT.5/RW.4, Gandaria Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140',
            ],
        );
        Company::create(
            [
                'company_name' => 'Toko Kue Sara',
                'company_about' => 'Toko Kue Sara adalah usaha yang bergerak dibidang kuliner terutama bakery, pastry & Kue basah di Surabaya',
                'company_no' => '8',
                'company_size' => '1-49 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Rumah Makan',
                'company_additional' => 'https://www.instagram.com/tokokuesarasurabaya/?hl=en',
                'company_place' => 'Jl. Dukuh Kupang Barat I No.200-202, Dukuh Kupang, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60225',
            ],
        );
        Company::create(
            [
                'company_name' => 'PT. Kotagede Jewellery Group',
                'company_about' => 'PT. Kotagede Jewellery Group merupakan perusahaan manufaktur cincin custom di Yogyakarta. Perusahaan yang berdiri sejak 15 Maret 2015, sudah mendapat penghargaan sebagai 5 Top Company In Yogyakarta versi BEKRAF tahun 2019. Tidak hanya fokus pada sisi bisnisnya saja, PT Kotagede Jewellery Group juga kental akan budaya spiritualnya. Hal ini terwujud dalam budaya kerja di dalamnya yang mengedepankan ajaran Al-Qur’an dan As-Sunnah sebagai dasarnya. Salah satu mimpi besar yang juga jadi misinya adalah turut berkontribusi dalam pengembangan pendidikan 1000 santri yatim piatu dan dhuafa. Silahkan kunjungi Website : https://kotagedejewellery.com/ IG : kotagede_jewellery',
                'company_no' => '9',
                'company_size' => '50-250 Karyawan',
                'company_time_acc' => 7,
                'company_category' => 'Manufaktur dan Produksi',
                'company_additional' => 'kotagedejewellery.com/',
                'company_place' => 'Jalan Palagan No.km 7, RT.13/RW.35, Jongkang, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581',
            ],
        );
    }
}
