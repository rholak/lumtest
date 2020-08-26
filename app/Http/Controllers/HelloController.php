<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return ['cats' => 'meow', 'dogs' => 'woof', 'cows' => 'fart'];
    }
}
