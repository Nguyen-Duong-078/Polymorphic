<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use App\Models\comments;
use App\Models\images;
use App\Models\ratings;
use App\Models\User;
use App\Models\videos;

class ArticleController extends Controller
{
    public function index()
    {
        // Lấy tất cả các bình luận của một bài viết cụ thể
        // $article = articles::find(1);
        // $comments = $article->comments;
        // return $article;

        // Lấy tất cả các đánh giá của một video cụ thể
        // $video = videos::with('ratings')->find(1);
        // $ratings = $video->ratings;
        // return $video;

        // Lấy tất cả các bình luận của một người dùng cụ thể
        // $user = User::with('comments')->find(1);
        // $comments = $user->comments;
        // return $user;

        // $article = articles::with('ratings')->find(1);
        // $ratings = $article->ratings()->avg('rating');
        // return $ratings;

        $user = User::with('comments')->find(1);
        $comments = $user->comments;
        $commentedArticles = $comments->where('commentable_type', articles::class)->map->commentable;
        $commentedVideos = $comments->where('commentable_type', videos::class)->map->commentable;
        $commentedImages = $comments->where('commentable_type', images::class)->map->commentable;
        return compact('commentedArticles', 'commentedVideos', 'commentedImages');
    }
}

