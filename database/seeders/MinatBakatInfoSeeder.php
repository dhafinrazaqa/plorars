<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinatBakatInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('minat_bakat_info')->insert([
            [
                'minat_bakat_type' => 'Enterprising',
                'karir' => json_encode([
                    'Perumahan',
                    'Perdagangan',
                    'Hukum',
                    'Bisnis',
                    'Ilmu Politik',
                    'Perdagangan Internasional',
                    'Perbankan / Keuangan'
                ])
            ],
            [
                'minat_bakat_type' => 'Conventional',
                'karir' => json_encode([
                    'Akuntansi',
                    'Pelaporan Pengandilan',
                    'Pertanggungan',
                    'Administrasi',
                    'Manajemen',
                    'Perbankan',
                    'Pengolah data'
                ])
            ],
            [
                'minat_bakat_type' => 'Social',
                'karir' => json_encode([
                    'Konseling',
                    'Perawatan',
                    'Terapi Fisik',
                    'Pendidikan',
                    'Pariwisata',
                    'Pelayan Masyarakat'
                ])
            ],
            [
                'minat_bakat_type' => 'Realistic',
                'karir' => json_encode([
                    'Pertanian',
                    'Asisten Kesehatan',
                    'Komputer',
                    'Konstruksi',
                    'Mekanik / Masinis',
                    'Teknik',
                    'Makanan dan perhotelan'
                ])
            ],
            [
                'minat_bakat_type' => 'Investigative',
                'karir' => json_encode([
                    'Biologi Kelautan',
                    'Teknik',
                    'Kimia',
                    'Ilmu Kehewanan',
                    'Kedokteran / Bedah',
                    'Ekonomi',
                    'Psikologi'
                ])
            ],
            [
                'minat_bakat_type' => 'Artistic',
                'karir' => json_encode([
                    'Seni Rupa dan Pertunjukan',
                    'Komunikasi',
                    'Tata rias',
                    'Fotografi',
                    'Radio dan TV',
                    'Desain Interior',
                    'Humoria',
                    'Penyanyi',
                    'Arsitektur'
                ])
            ]
        ]);
    }
}
