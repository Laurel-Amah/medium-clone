<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PublicProfileController extends Controller
{
    public function show(User $user)
    {
        $posts = $user->posts()
            ->where('published_at', '<=', now())
            ->latest()
            ->paginate();

        return view('profile.show', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
