<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
class PageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }

}
