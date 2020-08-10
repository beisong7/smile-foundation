<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\Program;
use App\Models\Slider;
use App\Models\Volunteer;
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
    public function index(Request $request)
    {
        $sliders = Slider::get();
        $events = Program::orderBy('id','desc')->where('type', 'humanitarian')->take(3)->get();
        $featured = Cause::where('active', true)->where('featured', 'yes')->first();
        $causes = Cause::where('active', true)->orderBy('id', 'desc')->take(3)->get();
//        return $banner;
        return view('pages.home.index')->with(
            [
                'events'=>$events,
                'sliders'=>$sliders,
                'featured'=>$featured,
                'causes'=>$causes
            ]
        );
    }

    public function adminLogin(){
        return view('admin.pages.auth.login');
    }

    public function about(){
        $volunteers = Volunteer::orderBy('id', 'desc')->select([
            'id',
            'fname',
            'lname',
            'formkey',
            'title',
            'fbook',
            'igram',
            'tweeta',
            'image'
            ])->take(7)->get();
        return view('pages.about.index')->with(['volunteers'=>$volunteers]);
    }

    public function contact(){
        return view('pages.contact.index');
    }

    public function causes(){
        $causes = Cause::where('active', true)->orderBy('id', 'desc')->paginate(12);
        return view('pages.causes.index')->with(['causes'=>$causes]);
    }

    public function previewCause($uuid){
        $cause = Cause::where('active', true)->where('uuid', $uuid)->first();

        if(!empty($cause)){
            return view('pages.causes.show')->with(['cause'=>$cause]);
        }
        return back();
    }

    public function previewTagCause($tag){
        $causes = Cause::where('active', true)
            ->where('tags', 'like', "%".$tag."%")
            ->paginate(12);


        if(!empty($causes)){
            return view('pages.causes.index')->with([
                'causes'=>$causes,
                'tag'=> $tag

            ]);
        }
        return back();
    }

    public function listEvents(){

        $event = Program::orderBy('id','desc')->where('type', 'humanitarian')->paginate(15);
        return view('pages.event.index')->with(['events'=>$event]);

    }

    public function viewEvent($title){
        $event = Program::where('title', $title)->first();

        if(!empty($event)){
            return view('pages.event.show')->with(['event'=>$event]);
        }
        return back();
    }

}
