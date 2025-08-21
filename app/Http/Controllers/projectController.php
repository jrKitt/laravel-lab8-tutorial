<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class projectController extends Controller
{

    public function index(){
        $project = new Projects();
        $items = $project::with('labs')->orderByDesc('budget')->get();
        return view('projects', compact('items'));
    }

}
