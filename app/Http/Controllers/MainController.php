<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Result;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Homepage() {
        $cats = Category::get();
        return view("home")->with(['cats' => $cats]);
    }

    public function Login() {
        return view("login");
    }

    public function Search(Request $req) {
        $results = Result::whereCat($req->what)->get();
        
        return view("search")->with(['results' => $results, 'cat' => $req->what]);
    }
}
