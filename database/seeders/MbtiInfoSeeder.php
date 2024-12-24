<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MbtiInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mbtiData = [
            ['mbti_type' => 'INTJ', 'mbti_image' => 'intj.png'],
            ['mbti_type' => 'ENTP', 'mbti_image' => 'entp.png'],
            ['mbti_type' => 'INFJ', 'mbti_image' => 'infj.png'],
            ['mbti_type' => 'ENFP', 'mbti_image' => 'enfp.png'],
            ['mbti_type' => 'ISTJ', 'mbti_image' => 'istj.png'],
            ['mbti_type' => 'ESTJ', 'mbti_image' => 'estj.png'],
            ['mbti_type' => 'ISFJ', 'mbti_image' => 'isfj.png'],
            ['mbti_type' => 'ESFJ', 'mbti_image' => 'esfj.png'],
            ['mbti_type' => 'INTP', 'mbti_image' => 'intp.png'],
            ['mbti_type' => 'ENTJ', 'mbti_image' => 'entj.png'],
            ['mbti_type' => 'INFP', 'mbti_image' => 'infp.png'],
            ['mbti_type' => 'ENFJ', 'mbti_image' => 'enfj.png'],
            ['mbti_type' => 'ISTP', 'mbti_image' => 'istp.png'],
            ['mbti_type' => 'ESTP', 'mbti_image' => 'estp.png'],
            ['mbti_type' => 'ISFP', 'mbti_image' => 'isfp.png'],
            ['mbti_type' => 'ESFP', 'mbti_image' => 'esfp.png'],
        ];

        DB::table('mbti_info')->insert($mbtiData);
    }
}
