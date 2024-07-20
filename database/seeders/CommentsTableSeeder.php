<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Article;
use App\Models\articles;
use App\Models\comments;
use App\Models\User;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // Giả sử bạn đã có một người dùng trong bảng users

        comments::create([
            'user_id' => $user->id,
            'content' => 'Bình luận mẫu cho bài viết 1',
            'commentable_id' => articles::first()->id,
            'commentable_type' => articles::class,
        ]);

        comments::create([
            'user_id' => $user->id,
            'content' => 'Bình luận mẫu cho video 1',
            'commentable_id' => \App\Models\videos::first()->id,
            'commentable_type' => \App\Models\videos::class,
        ]);
    }
}

