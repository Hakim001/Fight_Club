<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class HomeController extends Controller
{
    public function index() 
	{
		$projects = project::orderBy('id', 'desc')->get();
		
		return view('home.index', ['projects' => $projects]);
	}
}
