<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use App\Models\Banner;
use App\Traits\General\Utility;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use Utility;
    public function sliders(Request $request){
        $type = $request->input('type');
        $slider = [];
        if($type==='active'){
            $slider = Banner::where('active', true)->paginate(15);
        }elseif ($type==='inactive'){
            $slider = Banner::where('active', '!=', true)->paginate(15);
        }else{
            $slider = Banner::where('active', true)->paginate(15);
        }

        return view('admin.pages.slider.index')->with('sliders', $slider);
    }

    public function create(){
        $unid = $this->getId('SLD', 35);
        return view('admin.pages.slider.create')->with(['unid'=>$unid]);
    }

    public function store(Request $request){
        $slider = new Banner();
        $mainText = $request->input('main_text');
        if(empty($mainText)){
            return back()->withErrors(['Required Fields Missing'])->withInput($request->input());
        }
        $slider->main_text = $mainText;
        $slider->more_text = $request->input('more_text');
        $slider->button = $request->input('button')==='yes'?true:false;
        $slider->button_url = $request->input('button_url');
        $slider->button_text = $request->input('button_text');
        $slider->unid = $request->input('unid');
        $slider->active = false;
        $slider->save();

        return redirect()->route('slider.index')->withMessage('New Slider Created, Review and activate');
    }

    public function update(Request $request, $unid){
        $slider = Banner::where('unid', $unid)->first();
        if(!empty($slider)){
            $mainText = $request->input('main_text');
            if(empty($mainText)){
                return back()->withErrors(['Required Fields Missing'])->withInput($request->input());
            }
            $slider->main_text = $mainText;
            $slider->more_text = $request->input('more_text');
            $slider->button = $request->input('button')==='yes'?true:false;
            $slider->button_url = $request->input('button_url');
            $slider->button_text = $request->input('button_text');
            $slider->update();

            return back()->withMessage('Slider Updated');
        }
        return redirect()->route('slider.index')->withErrors(['Resource not found']);

    }

    public function show($unid){
        $slider = Banner::where('unid', $unid)->first();
        if(!empty($slider)){

            return view('admin.pages.slider.edit')->with(['slider'=>$slider]);
        }

        return back()->withErrors(['Resource not found']);
    }

    public function toggle($unid){
        $slider = Banner::where('unid', $unid)->first();
        $msg = "";
        if(!empty($slider)){

            if($slider->active){
                $msg = "Slider removed";
                $slider->active = false;
            }else{
                $msg = "Slider activated";
                $slider->active = true;
            }
            $slider->update();

            return back()->withMessage($msg);
        }

        return back()->withErrors(['Resource not found']);
    }

    public function uploadImages(Request $request, $model_id) {
        $exist = ImageUpload::where('model_id', $model_id)->select(['id'])->get();

        if($exist->count() < 1){

            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $dir = "data/slider";
            $image->move(public_path($dir),$imageName);
            $image = new ImageUpload();
            $image->url = $dir."/".$imageName;
            $image->unid = $this->getId("ImG", 25);
            $image->model_id = $model_id;
            $image->time = time();
            $image->name = $imageName;
            $image->valid = false;
            try{
                //SAVE IMAGE
                $image->save();
                return response()->json(["status" => "success", "data" => $image]);
            }catch (\Exception $e){
                return response()->json(["status" => "failed", "data" => $e->getMessage()]);
            }

        }

        return response()->json(["status" => "failed", "data" => null]);
    }

// --------------------- [ Delete image ] -----------------------------

    public function deleteImage(Request $request, $model_id) {
        $name = $request->input('filename');
        $imageUploaded = ImageUpload::where('name', $name)->where('model_id', $model_id)->first();
        if(!empty($imageUploaded)){
            $path = $imageUploaded->url;
            if (file_exists($path)) {
                unlink($path);
            }
            $filename = $imageUploaded->name;

            $imageUploaded->delete();
            return $filename;
        }

        return [false, $name];

    }

    public function popSingleImage(Request $request, $unid) {
        $name = $request->input('filename');
        $imageUploaded = ImageUpload::where('unid', $unid)->first();
        if(!empty($imageUploaded)){
            $path = $imageUploaded->url;
            if (file_exists($path)) {
                unlink($path);
            }

            $imageUploaded->delete();
            return back()->withMessage('Image Removed');

        }

        return back();

    }
}
