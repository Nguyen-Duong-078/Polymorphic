<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\images;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        images::create([
            'title' => 'Hình ảnh mẫu 1',
            'url' => 'http://example.com/image1.jpg',
        ]);

        images::create([
            'title' => 'Hình ảnh mẫu 2',
            'url' => 'http://example.com/image2.jpg',
        ]);
    }
}

