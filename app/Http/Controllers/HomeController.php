<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home';
        $pageTitleFormatted = '<span style="color: white;">Home</span>';
        
        return view('home', [
            'pageTitle' => $pageTitle,
            'pageTitleFormatted' => $pageTitleFormatted,
        ]);
    }
}
