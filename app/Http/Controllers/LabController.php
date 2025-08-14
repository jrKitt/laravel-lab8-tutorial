<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lab;

class LabController extends Controller
{
    public function index(){
        $items = DB::select('SELECT * FROM labs');
        return view('lab', compact('items'));
    }
}
