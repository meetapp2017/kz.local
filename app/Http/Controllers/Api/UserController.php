<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index($id = 0)
    {
        $user = new User();
        return ($id > 0)  ? $user->getUserById($id) : $user->getAllUsers();
    }
}
