<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services.index');
    }

    public function industries()
    {
        return view('pages.industries.index');
    }

    public function signage()
    {
        return view('pages.signage.index');
    }

    public function contact()
    {
        return view('pages.contact.index');
    }

    public function bookDemo()
    {
        return view('pages.contact.book-demo');
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
