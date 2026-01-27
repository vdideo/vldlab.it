<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function cookiePolicy()
    {
        return view('cookie-policy');
    }

    public function portfolio()
    {
        $items = PortfolioItem::active()->ordered()->get();

        return view('portfolio', compact('items'));
    }
}
