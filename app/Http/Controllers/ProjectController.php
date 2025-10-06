<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projectRepository = resolve(ProjectRepository::class);
        $projects = $projectRepository->activePaginate();
        return view('project.index', [
            'projects' => $projects,
        ]);
    }

    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }
}
