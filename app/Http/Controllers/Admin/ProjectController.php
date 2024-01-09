<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function create()
    {

        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|max:255|',
            'thumb' => 'required|url',
            'description' => 'required'
        ]);

        $newProject = Project::create($data);

        return redirect()->route('admin.projects.index');
    }

    public function edit(Project $project)

    {

        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|max:255|',
            'thumb' => 'required|url',
            'description' => 'required'
        ]);

        $project->update($data);

        return redirect()->route('admin.projects.show', $project->id);
    }

    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
