<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class registerController extends Controller
{
    function index(Request $request)
    {
        //return $request->input();
        //$test = json_decode($request->getContent(), true);

        $user = new User();
        $user = $user->register($request);

        if (isset($user)) {
            $request->session()->put('user', $user);
        }

        return response()->json($user);
    }
}
