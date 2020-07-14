<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Traits\General\Utility;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    use Utility;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->input('type');
        $causes = [];
        if($type==='active'){
            $causes = Cause::where('active', true)->paginate(15);
        }elseif ($type==='inactive'){
            $causes = Cause::where('active', '!=', true)->paginate(15);
        }else{
            $causes = Cause::where('active', true)->paginate(15);
        }

        return view('admin.pages.cause.index')->with('causes', $causes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uuid = $this->createUuid();
        return view('admin.pages.cause.create')->with('uuid', $uuid);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check main required field
        $info = $request->input('info');
        if(empty($info)){
           return back()->withErrors(['Full Details Missing'])->withInput($request->input());
        }

        $cause = new Cause();
        $cause->uuid = $request->input('uuid');
        $cause->title = $request->input('title');
        $cause->small_title = $request->input('small_title');
        $cause->user_id = auth()->user()->email;
        $cause->location = $request->input('location');
        $cause->intro = $request->input('intro');
        $cause->info = $request->input('info');
        $cause->goal = $request->input('goal');
        $cause->tags = $request->input('tags');
        $cause->featured = $request->input('featured');
        $cause->active = false;
        $cause->save();

        return redirect()->route('cause.index',['type'=>'inactive'])->withMessage('Cause Created Successfully. Review or Active.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $cause = Cause::where('uuid', $uuid)->first();
        if(!empty($cause)){
//            return $cause->uploads;
            return view('admin.pages.cause.show')->with(['cause'=>$cause]);
        }

        return back()->withErrors(['Resource not found']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function edit(Cause $cause)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $cause = Cause::where('uuid', $uuid)->first();
        if(!empty($cause)){
            $msg = "Cause Updated";

            $cause->title = $request->input('title');
            $cause->small_title = $request->input('small_title');
            $cause->location = $request->input('location');
            $cause->intro = $request->input('intro');
            $cause->info = $request->input('info');
            $cause->goal = $request->input('goal');
            $cause->tags = $request->input('tags');
            $cause->featured = $request->input('featured');
            $cause->update();
            return back()->withMessage($msg);
        }

        return back()->withErrors(['Resource not found']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cause $cause)
    {
        //
    }

    public function toggle($uuid){
        $cause = Cause::where('uuid', $uuid)->first();
        $msg = "";
        if(!empty($cause)){

            if($cause->active){
                $msg = "Cause removed";
                $cause->active = false;
            }else{
                $msg = "Cause activated";
                $cause->active = true;
            }
            $cause->update();

            return back()->withMessage($msg);
        }

        return back()->withErrors(['Resource not found']);
    }
}
