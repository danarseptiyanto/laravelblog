<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('user')->latest()->get();
        $projects = Project::latest()->get();
        return view('admin.admin', compact('posts', 'projects'));
    }
}
