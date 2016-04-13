<?php 

namespace App\Http\Controllers;

use File;

class HomeController extends Controller {

    public function index()
    {
        return view('index');
    }

}