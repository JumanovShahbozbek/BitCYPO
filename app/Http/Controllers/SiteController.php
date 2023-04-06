<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('page.about');
    }

    public function services()
    {
        return view('page.services');
    }

    public function testimonial()
    {
        return view('page.testimonial');
    }

    public function works()
    {
        return view('page.works');
    }

    public function contact()
    {
        return view('page.contact');
    }

}
