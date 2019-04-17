<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title', $title);
    }
    function about()
    {
        $title = 'About!';
        return view('pages.about',compact('title'));
    }
    function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
