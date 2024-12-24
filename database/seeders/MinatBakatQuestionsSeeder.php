<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinatBakatQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('minat_bakat_questions')->insert([
            [
                'question' => 'Apa yang biasanya Anda lakukan saat memiliki waktu luang ?',
                'options' => json_encode([
                    'A' => ['description' => 'Membaca buku atau menulis.', 'type' => 'Artistic'],
                    'B' => ['description' => 'Menonton film atau TV.', 'type' => 'Social'],
                    'C' => ['description' => 'Melakukan aktivitas fisik atau olahraga.', 'type' => 'Realistic'],
                    'D' => ['description' => 'Bersosialisasi dengan teman-teman.', 'type' => 'Social'],
                ])
            ],
            [
                'question' => 'Apa yang biasanya Anda nikmati dalam menghadapi masalah ?',
                'options' => json_encode([
                    'A' => ['description' => 'Menemukan solusi kreatif.', 'type' => 'Investigative'],
                    'B' => ['description' => 'Mencari bantuan dari orang lain', 'type' => 'Social'],
                    'C' => ['description' => 'Menganalisis masalah secara logis', 'type' => 'Investigative'],
                    'D' => ['description' => 'Mencoba berbagai pendekatan', 'type' => 'Enterprising'],
                ])
            ],
            [
                'question' => 'Apa hobi Anda yang paling disukai ?',
                'options' => json_encode([
                    'A' => ['description' => 'Seni atau kerajinan tangan.', 'type' => 'Artistic'],
                    'B' => ['description' => 'Bermain musik atau menyanyi.', 'type' => 'Artistic'],
                    'C' => ['description' => 'Berolahraga atau aktivitas luar ruangan.', 'type' => 'Realistic'],
                    'D' => ['description' => 'Membaca atau menulis.', 'type' => 'Conventional'],
                ])
            ],
            [
                'question' => 'Apa yang Anda sukai dalam konteks akademik ?',
                'options' => json_encode([
                    'A' => ['description' => 'Ilmu alam dan matematika.', 'type' => 'Investigative'],
                    'B' => ['description' => 'Bahasa dan sastra.', 'type' => 'Artistic'],
                    'C' => ['description' => 'Seni dan humaniora.', 'type' => 'Artistic'],
                    'D' => ['description' => 'Ilmu sosial dan kemanusiaan.', 'type' => 'Social'],
                ])
            ],
            [
                'question' => 'Apa jenis aktivitas sosial yang paling Anda nikmati ?',
                'options' => json_encode([
                    'A' => ['description' => 'Menyanyi atau membaca buku.', 'type' => 'Social'],
                    'B' => ['description' => 'Bermain game atau bermain komputer.', 'type' => 'Enterprising'],
                    'C' => ['description' => 'Bersantai dengan teman dekat', 'type' => 'Social'],
                    'D' => ['description' => 'Terlibat dalam kegiatan amal atau sosial.', 'type' => 'Social'],
                ])
            ],
            [
                'question' => 'Manakah dari berikut ini yang paling sesuai dengan kepribadian Anda ?',
                'options' => json_encode([
                    'A' => ['description' => 'Analitis', 'type' => 'Investigative'],
                    'B' => ['description' => 'Sosial', 'type' => 'Social'],
                    'C' => ['description' => 'Artistik', 'type' => 'Artistic'],
                    'D' => ['description' => 'Praktis', 'type' => 'Realistic'],
                ])
            ],
            [
                'question' => 'Bidang mana yang paling menarik bagi Anda ?',
                'options' => json_encode([
                    'A' => ['description' => 'Teknologi', 'type' => 'Realistic'],
                    'B' => ['description' => 'Pendidikan', 'type' => 'Social'],
                    'C' => ['description' => 'Seni', 'type' => 'Artistic'],
                    'D' => ['description' => 'Bisnis', 'type' => 'Enterprising'],
                ])
            ],
            [
                'question' => 'Apa jenis buku yang paling Anda sukai ?',
                'options' => json_encode([
                    'A' => ['description' => 'Fiksi', 'type' => 'Artistic'],
                    'B' => ['description' => 'Non-Fiksi', 'type' => 'Investigative'],
                    'C' => ['description' => 'Biografi', 'type' => 'Social'],
                    'D' => ['description' => 'Panduan', 'type' => 'Conventional'],
                ])
            ],
            [
                'question' => 'Jenis pekerjaan apa yang menurut Anda paling memuaskan ?',
                'options' => json_encode([
                    'A' => ['description' => 'Pekerjaan Kreatif', 'type' => 'Artistic'],
                    'B' => ['description' => 'Pekerjaan Teknis', 'type' => 'Realistic'],
                    'C' => ['description' => 'Pekerjaan Sosial', 'type' => 'Social'],
                    'D' => ['description' => 'Pekerjaan Manajerial', 'type' => 'Enterprising'],
                ])
            ],
            [
                'question' => 'Bagaimana cara Anda mengatasi masalah ?',
                'options' => json_encode([
                    'A' => ['description' => 'Analisis mendalam', 'type' => 'Investigative'],
                    'B' => ['description' => 'Bekerja sama dengan tim', 'type' => 'Social'],
                    'C' => ['description' => 'Mencari solusi kreatif', 'type' => 'Artistic'],
                    'D' => ['description' => 'Mengambil tindakan langsung', 'type' => 'Realistic'],
                ])
            ]
        ]);
    }
}
