<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function animals() {
        return view('pages.animals');
    }
    public function funny () {
        return view('pages.funny');
    }
    public function random () {
        return view('pages.random');
    }
    public function sport () {
        return view('pages.sport');
    }
}
