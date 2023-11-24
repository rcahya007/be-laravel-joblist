<?php

namespace Database\Seeders;

use App\Models\JobDetails;
use Illuminate\Database\Seeder;

class JobDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobDetails::create([
            "id_job" => 1,
            "intro_job_desc" => null,
            "job_desc" => array(
                "melakukan maintenance software dan hardware komputer",
                "cek & maintenance koneksi internet",
                "cek & maintenance kabel PC kantor",
                "develop website perusahaan",
                "develop sistem HRIS dan software lainnya",
            ),
            "job_weekday" => "Senin - Sabtu",
            "job_time" => "09:00 - 17:00",
            "job_requirements" => array(
                "JavaScript",
                "CSS",
                "Administrative Software",
                "Computer Hardware Maintenance",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "Pendidikan minimal S1 Sistem Informasi/Teknik Informatika/Sistem Komputer & Jaringan",
                "pengalaman minimal 2 tahun di bidang IT",
                "memahami bahasa pemograman C",
                "memahami Java Script, CSS, My Sql",
                "menguasai java android",
                "memahami software dan hardware",
                "memahami penggunaan anydesk & aster",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Tidak ada ketentuan",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 2,
            "intro_job_desc" => null,
            "job_desc" => array('',),
            "job_weekday" => "Senin - Sabtu",
            "job_time" => "08:00 - 17:00",
            "job_requirements" => array(
                "3D Image Processing Software Usage",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "Perempuan max 30 Tahun ",
                "Lulusan Min. D3 Accounting ",
                "memahami bahasa pemograman C",
                "Pengalaman Min. 1 Tahun ",
                "Mahir Accurate ",
                "Penempatan : Pabrik Manyar, Gresik",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Tidak ada ketentuan",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 3,
            "intro_job_desc" => null,
            "job_desc" => array(
                "Configure internal systems",
                "Diagnose and troubleshoot technical issues",
                "Upgrade the network infrastructure",
                "Install servers, devices and firewalls",
                "Train new system users and set up their accounts",
                "Monitor the performance of servers, software and hardware",
                "Ensure the smooth deployment of new applications",
                "Update technical documentation",
            ),
            "job_weekday" => "Senin - Jumat",
            "job_time" => "09:00 - 18:00",
            "job_requirements" => array(
                "Access Point Network Troubleshooting",
                "Basic Networking Knowledge",
                "Windows Server",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "1-2 years experienced as a IT Staff ",
                "Can communicate in English",
                "Solid understanding of networking",
                "Have knowledge of configuration VRRP - High Availability for router Mikrotik, switch Cisco.",
                "Have knowledge about setup and installing the Access Point (Wifi) Cambium, Unifi, and Aruba.",
                "Have knowledge about setup and installing the Windows Server system (Active Directory, GPO)",
                "Knowledge of system security techniques",
                "Good problem-solving and communication skills",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 1 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 4,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Senin - Sabtu",
            "job_time" => "08:00 - 17:00",
            "job_requirements" => array(
                "B2B Sales Development",
                "Building Sales Networks",
                "Body Language Communication",
            ),
            "job_type_condition" => "Kontrak • Kerja di kantor",
            "job_criteria" => array(
                "Pria Max usia 27 tahun",
                "Lulusan S1 dari berbagai jurusan",
                "Memiliki kendaraan bermotor",
                "Berpengalaman sebagai sales proyek developer/arsitek/interior/proyek pembangunan gedung minimal 1 tahun",
                "Memahami teknik sales dalam skala bidang proyek atau B2B",
                "Memiliki relasi pada proyek-proyek swasta maupun pemerintahan",
                "Tekun dan ulet",
                "Memiliki kemampuan komunikasi dan negosiasi yang baik",
                "Mampu bekerja di bawah tekanan",
                "Bersedia untuk bekerja di luar Surabaya",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 1 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 5,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Diinfokan lebih lanjut",
            "job_time" => "Diinfokan lebih lanjut",
            "job_requirements" => array(
                "Building Sales Networks",
                "Keterampilan Komunikasi",
                "Product Knowledge",
            ),
            "job_type_condition" => "Kontrak • Kerja di kantor",
            "job_criteria" => array(
                "Pria/wanita Usia 23 - 27 tahun",
                "Pendidikan minimal SMA/SMK",
                "Memiliki pengalaman minimal 1 tahun di bidang yang sama",
                "memiliki komunikasi yang baik",
                "Berpenampilan menarik",
                "Berorientasi pada target",
                "Mampu bekerja sama dalam tim",
                "Memiliki kendaraan pribadi",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 1 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 6,
            "intro_job_desc" => null,
            "job_desc" => array(
                "Menjaga kebersihan area toko dan barang jual",
                "Melakukan kegiatan sales",
                "Membantu Koordinator/Leader/supervisor untuk mengelola produk, penataan dan penjualan.",
                "Mengajak pengunjung untuk mampir ke stand penjualan.",
                "Memperkenalkan sebuah produk dan memberikan informasi produk.",
                "Melakukan pencatatan penjualan.",
                "Membangun kepercayaan terhadap konsumen.",
                "Membantu konsumen menemukan produk yang sesuai dengan kebutuhan.",
                "Memberikan jawaban terhadap semua pertanyaan konsumen dan menanggapi komplain yang dilakukan pelanggan dengan baik.",
            ),
            "job_weekday" => "Diinfokan lebih lanjut",
            "job_time" => "08:00 - 17:00",
            "job_requirements" => array(
                "Business Sales Development",
                "Komunikasi Efektif",
            ),
            "job_type_condition" => "Kontrak • Kerja di kantor",
            "job_criteria" => array(
                "Min SMA/SMK. ",
                "Pria, Usia 18-28 tahun. ",
                "Memiliki pengalaman SALES RETAIL min 1 tahun dalam berjualan suatu produk (pengalaman retail di toko bahan bangunan/divisi paint lebih disukai).",
                "Berpenampilan menarik dan dapat berkomunikasi dengan baik. ",
                "Dapat menunjukkan kartu vaksin min vaksin 1. ",
                "Siap bekerja dengan target ",
                "Siap bekerja dengan sistem shifting ",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 2 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 7,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Senin - Minggu",
            "job_time" => "08:00 - 17:00",
            "job_requirements" => array(
                "Adaptability to Sales Needs",
            ),
            "job_type_condition" => "Kontrak • Kerja di kantor",
            "job_criteria" => array(
                "Pendidikan Min D3/S1 Jurusan : Manajemen/Komunikasi/Public Relation/Teknik Informatika/Computer Science/Teknik Telekomunikasi/Marketing/ Hubungan Internasional/Sistem Informasi/Bisnis/Ekonomi Pembangunan, GPA 3.0",
                "Usia maksimal 30 tahun ",
                "Memiliki pengalaman SALES min 1 tahun dalam berjualan suatu produk ",
                "Berpenampilan menarik dan dapar berkomunikasi dengan baik ",
                "Siap bekerja di lapangan ",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 1 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 8,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Diinfokan lebih lanjut",
            "job_time" => "06:00 - 21:00",
            "job_requirements" => array(
                "Kitchen Equipment Operation",
                "Kitchen Cleanliness Management",
                "Operating Kitchen Equipment",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "SOPAN, JUJUR, BISA BERKOMUNIKASI DENGAN BAIK, TANGGUNG JAWAB DAN DISIPLIN",
                "BISA BEKERJA CEPAT DIBIDANGNYA",
                "SIAP LEMBUR",
                "BISA SERABUTAN",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 2 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 9,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Diinfokan lebih lanjut",
            "job_time" => "05:30 - 14:30",
            "job_requirements" => array(
                "Food and Beverage Service Arrangement in Restaurant",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "DISIPLIN",
                "JUJUR",
                "SOPAN",
                "PEKERJA KERAS DAN TANGGUNG JAWAB",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 1 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 10,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Diinfokan lebih lanjut",
            "job_time" => "05:30 - 14:30",
            "job_requirements" => array(
                "Cooking Food",
                "Cooking skills",
                "Cooking Time Management",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "KARAKTER YANG HARUS DIMILIKI : JUJUR, SOPAN, TANGGUNG JAWAB DAN DISIPLIN",
                "PATUH PADA SOP, PERATURAN PERUSAHAAN DAN PIMPINAN",
                "BISA BEKERJA SERABUTAN DAN DI BAWAH TEKANAN",
                "PEKERJA KERAS, BEKERJA CEPAT DAN TEPAT WAKTU",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 2 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 11,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Diinfokan lebih lanjut",
            "job_time" => "02:00 - 17:00",
            "job_requirements" => array(
                "Cooking",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "HARUS MEMILKI KARAKTER : SOPAN, JUJUR, DISPLIN DAN TANGGUNG JAWAB",
                "HARUS TINGGAL DI MESS",
                "PEKERJA KERAS DAN MAU BELAJAR DENGAN CEPAT",
                "PATUH PADA SOP, PERATURAN PERUSAHAAN DAN PIMPINAN",
                "MAU BEKERJA SERABUTAN",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Tidak ada ketentuan",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 12,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Diinfokan lebih lanjut",
            "job_time" => "05:30 - 14:30",
            "job_requirements" => array(
                "Cooking",
                "Cooking Time Management",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "KARAKTER YANG HARUS DIMILIKI : JUJUR, SOPAN, TANGGUNG JAWAB DAN DISPLIN",
                "PEKERJA KERAS DAN BISA BEKERJA DALAM TEKANAN",
                "MAU BELAJAR DAN BISA BEKERJA CEPAT",
                "PATUH PADA SOP, PERATURAN PERUSAHAAN DAN PIMPINAN",
                "MAU BEKERJA SERABUTAN",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 2 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 13,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Senin - Jumat",
            "job_time" => "08:00 - 17:00",
            "job_requirements" => array(
                "Audio Content Editing",
                "Article Editing",
                "Building Social Media Engagement",
                "Managing Social Media",
                "Algorithm",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "Muslim, berusia maksimal 30 tahun",
                "Pendidikan min D3 segala jurusan Berpengalaman di bidang digital marketing 1 tahun (editing video)",
                "Merupakan pengguna aktif dan familiar dengan platform media sosial (Instagram, TikTok, YouTube, Facebook)",
                "bersedia ditempatkan di Semarang",
                "Bersedia jika ada pelatihan dan rolling sementara di pusat (Yogyakarta)",
                "Terbiasa melakukan riset trend konten untuk keperluan digital marketing organik dan digital marketing berbayar",
                "Wajib memiliki portofolio membuat konten FYP di reels maupun tiktok dan media lainnya dan berani tampil di depan kamera",
                "Menguasai dan antusias dalam dunia videografi mulai dari pengambilan gambar hingga editing akhir termasuk color grading, voice over dll dalam berbagai platform seperti: reels, tiktok, youtube, dan lainnya.",
                "Menguasai software video editing di Smartphone (VN, CapCut, InShot, Kinemaster, dan lainnya)",
                "Menguasai aplikasi video editing di smartphone (InShot, CapCut, dan lainnya) Cekatan, gesit, tidak baperan.",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 1 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
        JobDetails::create([
            "id_job" => 14,
            "intro_job_desc" => null,
            "job_desc" => array(
                "",
            ),
            "job_weekday" => "Senin - Jumat",
            "job_time" => "08:00 - 17:00",
            "job_requirements" => array(
                "Managing Social Media",
            ),
            "job_type_condition" => "Full Time • Kerja di kantor",
            "job_criteria" => array(
                "Muslim, berusia maksimal 30 tahun",
                "Pendidikan min D3 segala jurusan Berpengalaman di bidang digital marketing 1 tahun (editing video)",
                "Merupakan pengguna aktif dan familiar dengan platform media sosial (Instagram, TikTok, YouTube, Facebook)",
                "bersedia ditempatkan di Semarang",
                "Bersedia jika ada pelatihan dan rolling sementara di pusat (Yogyakarta)",
                "Terbiasa melakukan riset trend konten untuk keperluan digital marketing organik dan digital marketing berbayar",
                "Wajib memiliki portofolio membuat konten FYP di reels maupun tiktok dan media lainnya dan berani tampil di depan kamera",
                "Menguasai dan antusias dalam dunia videografi mulai dari pengambilan gambar hingga editing akhir termasuk color grading, voice over dll dalam berbagai platform seperti: reels, tiktok, youtube, dan lainnya.",
                "Menguasai software video editing di Smartphone (VN, CapCut, InShot, Kinemaster, dan lainnya)",
                "Menguasai aplikasi video editing di smartphone (InShot, CapCut, dan lainnya) Cekatan, gesit, tidak baperan.",
            ),
            "job_level" => "Pegawai",
            "job_experience" => "Minimal 1 Tahun",
            "job_spesialis" => "Tidak ada ketentuan",
        ]);
    }
}
