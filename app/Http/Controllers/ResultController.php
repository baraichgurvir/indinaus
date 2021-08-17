<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    private function AddProps(Result $result, array $props) {
        foreach ($props as $key => $prop) {
            if ($prop == '' || $prop == null) $prop = 'not having';
            $result->$key = $prop;
        }

        return $result;
    }

    public function AddResult(Result $result, Request $req) {
        $result = $this->AddProps($result, $req->all());
        $result->save();

        return response()->json(['status' => true]);;
    }
}
