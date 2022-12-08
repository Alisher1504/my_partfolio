<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Progres;
use App\Models\Sidebar;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $prog = Progres::all();
        $about = About::all();
        $sidebar = Sidebar::all();
        $category = Category::all();
        return view('frontend.index', compact('category', 'sidebar', 'about', 'prog'));
    }
}
