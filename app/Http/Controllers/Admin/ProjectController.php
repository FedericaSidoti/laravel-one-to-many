<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Validation\Rule;
use App\Models\Type;

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
        $types = Type::all();

        return view('admin.projects.create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|max:255|',
            'thumb' => 'required|url',
            'description' => 'required',
            'type_id' => 'nullable|exists:types,id'
        ]);

        $newProject = Project::create($data);

        return redirect()->route('admin.projects.index', $newProject);
    }

    public function edit(Project $project)

    {
        $types = Type::all();

        return view('admin.projects.edit', compact('project', 'types'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|max:255|',
            'thumb' => 'required|url',
            'description' => 'required',
            'type_id' => 'nullable|exists:types,id'
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
