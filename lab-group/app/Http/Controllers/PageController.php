<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $message = 'Welcome to the Home Page!';
        return view('pages.home', compact('message'));
    }

    public function about()
    {
        $message = 'This is the About Page.';
        return view('pages.about', compact('message'));
    }

    public function contact()
    {
        $message = 'Reach us throght the contact page.';
        return view('pages.contact', compact('message'));
    }
}
