<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $title = "Welcome to Laravel Dylan O!";
        //below is one way to pass values
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);

    }

    public function about(){
        $title = "Welcome to the about page Dylan!";
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']


        );

        return view('pages.services')->with($data);
    }
}
