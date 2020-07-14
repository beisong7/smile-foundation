<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Models\Cause;
use App\Models\Slider;
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
        $banner = Slider::get();
        $events = Program::orderBy('id','desc')->where('type', 'humanitarian')->take(3)->get();
        $featured = Cause::where('active', true)->where('featured', 'yes')->first();
        $causes = Cause::where('active', true)->orderBy('id', 'desc')->take(3)->get();
//        return $banner;
        return view('pages.home.index')
            ->with([
                'events'=>$events,
                'banners'=>$banner,
                'featured'=>$featured,
                'causes'=>$causes
            ]);
    }

    public function adminLogin(){
        return view('admin.pages.auth.login');
    }

    public function causes(){
        $causes = Cause::where('active', true)->orderBy('id', 'desc')->paginate(12);
        return view('pages.causes.index')->with(['causes'=>$causes]);
    }
}
