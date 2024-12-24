<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'question' => 'Apakah Anda lebih suka bekerja dengan orang lain daripada sendirian?',
                'options' => json_encode([
                    'A' => ['type' => 'E', 'point' => 1], // Setuju
                    'B' => ['type' => 'I', 'point' => 3], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih fokus pada gambaran besar daripada detail?',
                'options' => json_encode([
                    'A' => ['type' => 'S', 'point' => 2], // Tidak Setuju
                    'B' => ['type' => 'N', 'point' => 4], // Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka merencanakan segala sesuatu terlebih dahulu daripada spontan?',
                'options' => json_encode([
                    'A' => ['type' => 'J', 'point' => 5], // Setuju
                    'B' => ['type' => 'P', 'point' => 3], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih menikmati kegiatan yang terstruktur daripada yang bebas?',
                'options' => json_encode([
                    'A' => ['type' => 'J', 'point' => 4], // Setuju
                    'B' => ['type' => 'P', 'point' => 2], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih mengandalkan logika daripada perasaan dalam mengambil keputusan?',
                'options' => json_encode([
                    'A' => ['type' => 'T', 'point' => 5], // Setuju
                    'B' => ['type' => 'F', 'point' => 1], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka menghabiskan waktu dengan teman-teman daripada waktu pribadi?',
                'options' => json_encode([
                    'A' => ['type' => 'E', 'point' => 2], // Setuju
                    'B' => ['type' => 'I', 'point' => 4], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka berbicara langsung daripada menulis?',
                'options' => json_encode([
                    'A' => ['type' => 'E', 'point' => 3], // Setuju
                    'B' => ['type' => 'I', 'point' => 2], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka kegiatan yang menantang daripada yang santai?',
                'options' => json_encode([
                    'A' => ['type' => 'S', 'point' => 4], // Setuju
                    'B' => ['type' => 'N', 'point' => 1], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka bekerja berdasarkan aturan daripada mencari cara yang lebih fleksibel?',
                'options' => json_encode([
                    'A' => ['type' => 'J', 'point' => 3], // Setuju
                    'B' => ['type' => 'P', 'point' => 5], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka bekerja mandiri daripada mendapatkan masukan?',
                'options' => json_encode([
                    'A' => ['type' => 'E', 'point' => 1], // Tidak Setuju
                    'B' => ['type' => 'I', 'point' => 4], // Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih senang bekerja dengan fakta daripada teori?',
                'options' => json_encode([
                    'A' => ['type' => 'S', 'point' => 5], // Setuju
                    'B' => ['type' => 'N', 'point' => 2], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka membuat keputusan cepat daripada mengambil waktu untuk merenung?',
                'options' => json_encode([
                    'A' => ['type' => 'J', 'point' => 4], // Setuju
                    'B' => ['type' => 'P', 'point' => 3], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih merasa puas setelah menyelesaikan tugas dengan rencana yang jelas daripada secara kreatif?',
                'options' => json_encode([
                    'A' => ['type' => 'J', 'point' => 2], // Setuju
                    'B' => ['type' => 'P', 'point' => 5], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih merasa nyaman saat berbicara di depan umum daripada berbicara dalam kelompok kecil?',
                'options' => json_encode([
                    'A' => ['type' => 'E', 'point' => 5], // Setuju
                    'B' => ['type' => 'I', 'point' => 3], // Tidak Setuju
                ])
            ],
            [
                'question' => 'Apakah Anda lebih suka mengambil keputusan berdasarkan data dan fakta daripada berdasarkan perasaan dan nilai pribadi?',
                'options' => json_encode([
                    'A' => ['type' => 'T', 'point' => 3], // Setuju
                    'B' => ['type' => 'F', 'point' => 5], // Tidak Setuju
                ])
            ]
        ]);
    }
}
