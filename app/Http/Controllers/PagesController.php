<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome its me Marsh';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'Welcome its me About';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $title = 'Welcome it me Services';
        return view('pages.services')->with('title',$title);
    }
}
