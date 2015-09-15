<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $data = [
            'first' => 'Salman',
            'last'  => 'Ahmed',
        ];

        return view('pages.about', $data);
    }

    public function contact()
    {
        $data = [
            'email' => 'salman@email.com',
        ];

        return view('pages.contact', $data);
    }
}
