<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cities;
use App\Models\Result;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Homepage() {
        $cats = Category::get();
        $cities = Cities::get();
        return view("home")->with(['cats' => $cats, 'cities' => $cities]);
    }

    public function Login() {
        return view("login");
    }

    public function Search(Request $req) {
        $results = Result::whereCat($req->what)->get();
        
        return view("search")->with(['results' => $results, 'cat' => $req->what]);
    }
}
