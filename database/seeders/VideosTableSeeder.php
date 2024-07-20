<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;
use App\Models\videos;

class VideosTableSeeder extends Seeder
{
    public function run()
    {
        videos::create([
            'title' => 'Video mẫu 1',
            'url' => 'http://example.com/video1',
        ]);

        videos::create([
            'title' => 'Video mẫu 2',
            'url' => 'http://example.com/video2',
        ]);
    }
}

