<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::truncate();

        Section::insert([
            [
                'type' => 'hero',
                'title' => 'Happy Anniversary',
                'subtitle' => 'Counting every seconds with You',
                'content' => json_encode([
                    'headline' => 'Happy Anniversary Sayang 💜',
                    'message' => 'Makasih ya udah selalu suport aku, dan ngebuat aku percaya diri. Aku seneng banget bisa tumbuh bareng kamu.',
                    'signature' => '-WanXSky',
                    'image' => '/asset/image/IMG-20250723-0039.jpg',
                    'contdown_date' => '2025-07-22T00:00:00',
                ]),
                'order' => 1,
                'is_active' => true
            ],

            [
                'type' => 'about',
                'title' => 'About Us',
                'subtitle' => 'Cerita tentang kita.',
                'content' => json_encode([
                    'story' => 'Berawal cuma nanyain kabar kamu kenapa gak masuk sekolah dan akhirnya nyoba buat buka diri...',
                ]),
                'order' => 2,
                'is_active' => true
            ],

            [
                'type' => 'memories',
                'title' => 'Sweet Memories',
                'subtitle' => 'Momen-momen berharga',
                'order' => 3,
                'is_active' => true
            ],

            [
                'type' => 'reasons',
                'title' => 'Why I Love You',
                'subtitle' => 'Alasan aku suka kamu',
                'order' => 4,
                'is_active' => true
            ],

            [
                'type' => 'timeline',
                'title' => 'Our Journey',
                'subtitle' => 'Perjalana Cinta Kita',
                'order' => 5,
                'is_active' => true
            ],

            [
                'type' => 'gallery',
                'title' => 'Our Gallery',
                'subtitle' => 'Koleksi Momen Bahagia',
                'order' => 6,
                'is_active' => true
            ],

            [
                'type' => 'letter',
                'title' => 'A Letter For You',
                'subtitle' => 'Sebuah Pesan dari Aku',
                'content' => json_encode([
                    'body' => 'Aku cinta sama kamu kemarin, hari ini, dan selamanya.',
                ]),
                'order' => 7,
                'is_active' => true
            ],

            [
                'type' => 'quotes',
                'title' => 'Love Quotes',
                'subtitle' => 'Kata-kata',
                'order' => 8,
                'is_active' => true
            ],

            [
                'type' => 'song',
                'title' => 'Our Songs',
                'subtitle' => 'Lagu yang mengingatkanku padamu',
                'order' => 9,
                'is_active' => true
            ],
        ]);
    }
}
