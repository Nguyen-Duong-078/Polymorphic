<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rating;
use App\Models\Article;
use App\Models\articles;
use App\Models\ratings;
use App\Models\User;

class RatingsTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        ratings::create([
            'user_id' => $user->id,
            'rating' => 5,
            'rateable_id' => articles::first()->id,
            'rateable_type' => articles::class,
        ]);

        ratings::create([
            'user_id' => $user->id,
            'rating' => 4,
            'rateable_id' => \App\Models\videos::first()->id,
            'rateable_type' => \App\Models\videos::class,
        ]);
    }
}
