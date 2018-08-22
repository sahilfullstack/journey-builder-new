<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tree;

class TreeController extends Controller
{
    public function show(Request $request, $slug)
    {
        $tree = Tree::find(1);
        
        return view('trees.show', compact('tree'));
    }
}
