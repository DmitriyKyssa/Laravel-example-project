<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function contactPage(){
        return view('contact');
    }
}
