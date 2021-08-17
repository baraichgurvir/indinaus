<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Homepage() {
        return view("home");
    }

    public function Login() {
        return view("login");
    }

    public function Register() {
        return view("register");
    }
}
