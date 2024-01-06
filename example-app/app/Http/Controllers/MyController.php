<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public $myvar = "cyka blyat";

    function __construct()
    {

    }

    public function index()
    {
        return view('test.home');
    }

    public function store(Request $req)
    {
        $data['myinput'] = $req->input('myinput');
        return view('my-route', $data);
    }
}
