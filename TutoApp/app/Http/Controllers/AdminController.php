<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProjectRequest;

use App\project;

class AdminController extends Controller
{
    public function getProject()
	{
		$projects = project::orderBy('id', 'desc')->get();
		return view('admin.projects', ['projects' => $projects]);
	}
	
	public function postProject(ProjectRequest $request)
	{
		$project = new project;
		
		$project->title = $request->title;
		
		$project->body = $request->body;
		
		$project->save();
		
		return redirect('admin');
	}
	
	public function removeProject($id)
	{
		$project = project::find($id);
		
		if($project)
		{
			$project->delete();
			return redirect('admin');
		}
		else
		{
			return redirect('admin');
		}
	}
	
	public function getEditProject($id)
	{
		$project = project::find($id);
		
		if($project)
		{
			
			return view('admin.edit', ['project' => $project]);
		}
		else
		{
			return redirect('admin');
		}
		
	}
	
	public function postEditProject(ProjectRequest $request, $id)
	{
		$project = project::find($id);
		
		if ($project)
		{
			$project->title = $request->title;
			$project->body = $request->body;
			
			$project->save();
			
			return redirect(url()->current())->with('status','project mis a jour !');
		}
		else
		{
			return redirect('admin');
		}
	}
}
