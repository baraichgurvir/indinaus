<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cities;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminPage() {
        $cats = Category::get();
        $cities = Cities::get();

        return view("Admin.admin")->with(['cats' => $cats, 'cities' => $cities]);
    }
}
