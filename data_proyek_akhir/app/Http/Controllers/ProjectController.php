<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->save();
        return response()->json($project, 201);
    }
}