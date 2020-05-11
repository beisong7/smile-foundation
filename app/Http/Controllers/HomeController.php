<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::where('type', 'slider')->get();
        $events = Program::orderBy('id','desc')->where('type', 'humanitarian')->take(3)->get();
//        return $banner;
        return view('pages.home.index')
            ->with('events', $events)
            ->with('banners', $banner);
    }
}
