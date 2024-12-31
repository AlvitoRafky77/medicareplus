<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Quiz::insert([
            [
                'question' => 'Berapa jumlah tulang manusia dewasa?',
                'option_a' => '200',
                'option_b' => '206',
                'option_c' => '210',
                'option_d' => '215',
                'correct_option' => 'b',
            ],
            [
                'question' => 'Bagian tubuh manusia yang memiliki jumlah tulang terbanyak?',
                'option_a' => 'Kaki',
                'option_b' => 'Lengan',
                'option_c' => 'Tangan',
                'option_d' => 'Tulang belakang',
                'correct_option' => 'c',
            ],
            [
                'question' => 'Organ terbesar dalam tubuh manusia adalah?',
                'option_a' => 'Hati',
                'option_b' => 'Otak',
                'option_c' => 'Kulit',
                'option_d' => 'Paru-paru',
                'correct_option' => 'c',
            ],
            [
                'question' => 'Apa fungsi utama hemoglobin dalam darah?',
                'option_a' => 'Membawa oksigen',
                'option_b' => 'Mengatur suhu tubuh',
                'option_c' => 'Melawan infeksi',
                'option_d' => 'Menyerap nutrisi',
                'correct_option' => 'a',
            ],
            [
                'question' => 'Berapa jumlah gigi pada manusia dewasa yang sehat?',
                'option_a' => '30',
                'option_b' => '32',
                'option_c' => '34',
                'option_d' => '28',
                'correct_option' => 'b',
            ],
            [
                'question' => 'Apa nama tulang yang melindungi otak?',
                'option_a' => 'Tulang punggung',
                'option_b' => 'Tulang rusuk',
                'option_c' => 'Tengkorak',
                'option_d' => 'Tulang dada',
                'correct_option' => 'c',
            ],
            [
                'question' => 'Bagian tubuh manusia yang bertanggung jawab untuk menghasilkan insulin adalah?',
                'option_a' => 'Hati',
                'option_b' => 'Pankreas',
                'option_c' => 'Ginjal',
                'option_d' => 'Paru-paru',
                'correct_option' => 'b',
            ],
            [
                'question' => 'Apa nama protein yang membuat kuku dan rambut manusia kuat?',
                'option_a' => 'Kolagen',
                'option_b' => 'Keratin',
                'option_c' => 'Elastin',
                'option_d' => 'Albumin',
                'correct_option' => 'b',
            ],
            [
                'question' => 'Bagian tubuh manusia yang memiliki selera rasa adalah?',
                'option_a' => 'Lidah',
                'option_b' => 'Hidung',
                'option_c' => 'Kulit',
                'option_d' => 'Gigi',
                'correct_option' => 'a',
            ],
            [
                'question' => 'Apa yang terjadi jika seseorang tidak mendapatkan cukup vitamin D?',
                'option_a' => 'Kebutaan malam',
                'option_b' => 'Penyakit tulang',
                'option_c' => 'Penyakit kulit',
                'option_d' => 'Anemia',
                'correct_option' => 'b',
            ],
        ]);
    }
}
