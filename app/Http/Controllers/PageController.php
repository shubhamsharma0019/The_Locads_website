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

    public function contactA()
    {
        return view('pages.contact-a');
    }

    public function contactB()
    {
        return view('pages.contact-b');
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
