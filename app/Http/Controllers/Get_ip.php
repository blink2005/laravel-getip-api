<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Get_ip extends Controller
{
    public function ip(Request $request)
    {
        return response()->json(['ip' => $request->ip()]);
    }
}
