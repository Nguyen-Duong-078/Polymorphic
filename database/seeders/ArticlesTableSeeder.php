<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\articles;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        articles::create([
            'title' => 'Bài viết mẫu 1',
            'content' => 'Nội dung của bài viết mẫu 1',
        ]);

        articles::create([
            'title' => 'Bài viết mẫu 2',
            'content' => 'Nội dung của bài viết mẫu 2',
        ]);
    }
}
