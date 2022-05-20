<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function welcome()
    {
        $data = [
            "firstName" => request('firstName') ? request('firstName') : "John",
            "lastName" => request('lastName') ? request('lastName') : "Doe"
        ];
        return view('welcome', $data);
    }
}
