<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // indexメソッドをここに追加
    public function index()
    {
        return view('index');
    }
}
