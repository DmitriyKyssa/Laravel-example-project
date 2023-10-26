<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestPageController extends Controller
{
    public function test(){
        $test = Test::find(1);
        dump($test);
    }
}
