<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Cardea';
        return view('pages.index')->with('title', $title);
    }

    public function dashboard(){
        $title = 'Welcome to Dashboard';
        return view('pages.dashboard')->with('title', $title);
    }

    public function form(){
        $title = 'Welcome to Form';
        return view('pages.form')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Service A', 'Service B', 'Service C']
        );
        return view('pages.services')->with($data);
    }
}
