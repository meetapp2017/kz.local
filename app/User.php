<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class User extends Model
{

    function getAllUsers()
    {
        return DB::table('users')
            ->select('id', 'username', 'email')->get();
    }

    function getUserById($id)
    {
        return $this->where('id', $id)->get();
    }

    function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        return DB::table('users')
            ->select('id', 'username', 'email')
            ->where('username', $username)
            ->where('password', $password)
            ->first();
    }

    function register(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');

        $id = DB::table('users')->insertGetId([
            'username' => $username,
            'password' => $password,
            'email' => $email,
        ]);

        if ($id > 0)
            return $this->login($request);
        else
            return false;
    }
}
