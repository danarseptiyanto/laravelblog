<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        $projects = Project::latest()->get();
        return view('home', compact('posts', 'projects'));
    }
}
