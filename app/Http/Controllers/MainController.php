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
        if ($req->where != "Choose City") {
            $results = Result::where(['cat' => $req->what, 'city' => $req->where])->orderBy('rating', 'DESC')->get();
            $resultsCount = Result::where(['cat' => $req->what, 'city' => $req->where])->count();
        } else {
            $results = Result::whereCat($req->what)->orderBy('rating', 'DESC')->get();
            $resultsCount = Result::whereCat($req->what)->count();
        }
        $cats = Category::get();
        $cities = Cities::get();

        return view("search")->with(['results' => $results, 'category' => $req->what, 'count' => $resultsCount, 'cats' => $cats, 'cities' => $cities]);
    }

    public function SpotLighResults(Request $req) {
        $result = Result::whereTitle($req->result)->first();
        $cats = Category::get();
        $cities = Cities::get();

        return view("spotlight")->with(['result' => $result, 'cats' => $cats, 'cities' => $cities]);
    }
}
