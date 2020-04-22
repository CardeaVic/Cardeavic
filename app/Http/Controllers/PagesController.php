<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing(){
        $title = 'Welcome to Cardea';
        return view('pages.landing')->with('title', $title);
    }

}
