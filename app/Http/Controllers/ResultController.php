<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    private function AddProps(Result $result, array $props)
    {
        foreach ($props as $key => $prop) {
            if ($prop == '' || $prop == null) $prop = 'not having';
            if ($key == "image") $prop = "/Images/" . $prop;
            $result->$key = $prop;
        }

        return $result;
    }

    public function AddResult(Result $result, Request $req)
    {
        $req->validate([
            'image' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'address' => 'required',
            'rating' => 'required',
            'phoneNumber' => 'required',
            'cat' => 'required',
            'city' => 'required'
        ]);

        $result = $this->AddProps($result, $req->all());
        $result->save();

        return redirect()->back();
    }
}
