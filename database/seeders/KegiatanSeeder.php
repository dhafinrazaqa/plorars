<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert sample data into the `kegiatans` table
        DB::table('kegiatans')->insert([
            [
                'judul' => 'SEARCH',
                'kategori' => 'Unit Kegiatan Mahasiswa',
                'fakultas' => 'None',
                'deskripsi' => 'Merupakan sebuah organisasi reset atau penelitian mahasiswa sekaligus organisasi yang menangani berbagai kompetisi kemahasiswaan di kampus Telkom University. SEARCH sebagai organisasi riset mahasiswa Telkom University didesain sebagai UKM penelitian yang berfungsi mewadahi berbagai kegiatan mahasiswa Telkom University, agar mampu berperan sebagai agent of change melalui karya-karya penelitian yang bersifat inovatif, produktif, berfikir dengan analisis serta berkreatifitas dengan menyikapi setiap fenomena yang terjadi di dunia bisnis global sesuai disiplin ilmu yang berlaku di Telkom University.',
                'gambar' => 'workshop_web_dev.jpg',
                'link' => 'https://example.com/web-development',
            ],
            [
                'judul' => 'Seminar AI',
                'kategori' => 'UKM',
                'fakultas' => 'FIK',
                'deskripsi' => 'Seminar tentang teknologi AI dan aplikasinya dalam kehidupan sehari-hari.',
                'gambar' => 'seminar_ai.jpg',
                'link' => 'https://example.com/ai-seminar',
            ],
            [
                'judul' => 'Pelatihan Desain Grafis',
                'kategori' => 'Study Group',
                'fakultas' => 'FKB',
                'deskripsi' => 'Meningkatkan keterampilan desain grafis menggunakan Adobe Suite.',
                'gambar' => 'pelatihan_desain.jpg',
                'link' => 'https://example.com/design-training',
            ],
        ]);
    }
}
