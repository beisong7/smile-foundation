<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\Program;
use App\Models\Slider;
use App\Models\Sponsor;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function dashboard(){
        $causes = Cause::select(['id'])->get()->count();
        $volunteers = Volunteer::select(['id'])->get()->count();
        $sliders = Slider::select(['id'])->get()->count();
        $events = Program::select(['id'])->get()->count();
        $sponsors = Sponsor::select(['id'])->get()->count();
        return view('admin.pages.dashboard.index')->with([
            'causes'=>$causes,
            'sliders'=>$sliders,
            'volunteers'=>$volunteers,
            'events'=>$events,
            'sponsors'=>$sponsors,
        ]);
    }
}
