<?php

namespace ems_vue\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ems_vue\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('back-end.admin.home.dashboard.dashboard');
    }
}
