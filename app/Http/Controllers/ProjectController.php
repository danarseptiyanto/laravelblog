<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function newproject()
    {
        return view('admin.project.newproject');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'thumbnail1' => 'required|string|max:255',
            'thumbnail2' => 'required|string|max:255',
            'thumbnail3' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
        ]);

        Project::create($validated);
        return redirect(route('admin'));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('admin'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('detail-project', compact('project'));
    }
}
