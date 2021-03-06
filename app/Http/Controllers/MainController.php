<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    // Must be authenticated
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('dashboard.index');
    }
}
