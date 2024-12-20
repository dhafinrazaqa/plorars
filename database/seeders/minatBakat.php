<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class minatBakat extends Seeder
{
    public function run()
    {
        $questions = [
            ['question' => 'Apa yang biasanya Anda lakukan saat memiliki waktu luang ?', 'opsi' => json_encode([
                'option_a' => 'Membaca buku atau menulis.',
                'option_b' => 'Menonton film atau TV.',
                'option_c' => 'Melakukan aktivitas fisik atau olahraga.',
                'option_d' => 'Bersosialisasi dengan teman-teman.'
            ])],
            ['question' => 'Apa yang biasanya Anda nikmati dalam menghadapi masalah ?', 'opsi' => json_encode([
                'option_a' => 'Menemukan solusi kreatif.',
                'option_b' => 'Mencari bantuan dari orang lain',
                'option_c' => 'Menganalisis masalah secara logis',
                'option_d' => 'Mencoba berbagai pendekatan'
            ])],
            ['question' => 'Apa hobi Anda yang paling disukai ?', 'opsi' => json_encode([
                'option_a' => 'Seni atau kerajinan tangan.',
                'option_b' => 'Bermain musik atau menyanyi.',
                'option_c' => 'Berolahraga atau aktivitas luar ruangan.',
                'option_d' => 'Membaca atau menulis.'
            ])],
            ['question' => 'Apa yang Anda sukai dalam konteks akademik ?', 'opsi' => json_encode([
                'option_a' => 'Ilmu alam dan matematika.',
                'option_b' => 'Bahasa dan sastra.',
                'option_c' => 'Seni dan humaniora.',
                'option_d' => 'Ilmu sosial dan kemanusiaan.'
            ])],
            ['question' => 'Apa jenis aktivitas sosial yang paling Anda nikmati ?', 'opsi' => json_encode([
                'option_a' => 'Menyanyi atau membaca buku.',
                'option_b' => 'Bermain game atau bermain komputer.',
                'option_c' => 'Bersantai dengan teman dekat',
                'option_d' => 'Terlibat dalam kegiatan amal atau sosial.'
            ])],
            ['question' => 'Manakah dari berikut ini yang paling sesuai dengan kepribadian Anda ?', 'opsi' => json_encode([
                'option_a' => 'Analitis',
                'option_b' => 'Sosial',
                'option_c' => 'Artistik',
                'option_d' => 'Praktis'
            ])],
            ['question' => 'Bidang mana yang paling menarik bagi Anda?', 'opsi' => json_encode([
                'option_a' => 'Teknologi',
                'option_b' => 'Pendidikan',
                'option_c' => 'Seni',
                'option_d' => 'Bisnis'
            ])],
            ['question' => 'Apa jenis buku yang paling Anda sukai ?', 'opsi' => json_encode([
                'option_a' => 'Fiksi',
                'option_b' => 'Non-fiksi',
                'option_c' => 'Biografi',
                'option_d' => 'Panduan'
            ])],
            ['question' => 'Jenis pekerjaan apa yang menurut Anda paling memuaskan ?', 'opsi' => json_encode([
                'option_a' => 'Pekerjaan kreatif',
                'option_b' => 'Pekerjaan teknis',
                'option_c' => 'Pekerjaan sosial',
                'option_d' => 'Pekerjaan manajerial'
            ])],
            ['question' => 'Bagaimana cara Anda mengatasi masalah ?', 'opsi' => json_encode([
                'option_a' => 'Analisis mendalam',
                'option_b' => 'Bekerja sama dengan tim',
                'option_c' => 'Mencari solusi kreatif',
                'option_d' => 'Mengambil tindakan langsung'
            ])]
        ];

        DB::table('minat_bakats')->insert($questions);
    }
}
