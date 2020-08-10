<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use App\Models\Slider;
use App\Services\ImageUploader;
use App\Traits\General\Utility;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use Utility;
    private $imageFactory;

    public function __construct(ImageUploader $uploader)
    {
        $this->imageFactory = $uploader;
    }

    public function sliders(Request $request){
        $type = $request->input('type');
        $slider = [];
        if($type==='active'){
            $slider = Slider::where('active', true)->paginate(15);
        }elseif ($type==='inactive'){
            $slider = Slider::where('active', '!=', true)->paginate(15);
        }else{
            $slider = Slider::where('active', true)->paginate(15);
        }

//        return $slider;

        return view('admin.pages.sliders.index')->with('sliders', $slider);
    }

    public function create(){
        $uuid = $this->generateId('SLD', 35);
        return view('admin.pages.sliders.create')->with(['uuid'=>$uuid]);
    }

    public function store(Request $request){

        $mainText = $request->input('main_title');
        $image = "";
        if(empty($mainText)){
            return back()->withErrors(['Required Fields Missing'])->withInput($request->input());
        }

        $uploadResponse = $this->imageFactory->upload($request, 'photo');

        if($uploadResponse[0]){
            $slider = new Slider();
            $slider->uuid = $this->createUuid('sl', 24);
            $slider->main_title = $mainText;
            $slider->image = $uploadResponse[1];
            $slider->title = $request->input('title');
            $slider->sub_title = $request->input('sub_title');
            $slider->donate = $request->input('donate')==='yes'?true:false;
            $slider->menu = $request->input('menu')==='yes'?true:false;
            $slider->active = true;
            $slider->save();
            return redirect()->route('slider.index')->withMessage('New Slider added');
        }else{
            return back()->withErrors([$uploadResponse[1]])->withInput($request->input());
        }

    }

    public function update(Request $request, $uuid){

        $slider = Slider::where('uuid', $uuid)->first();
        if(!empty($slider)){

            $mainText = $request->input('main_title');
            if(empty($mainText)){
                return back()->withErrors(['Required Fields Missing'])->withInput($request->input());
            }

            $uploadResponse = $this->imageFactory->upload($request, 'photo');

            if($uploadResponse[0]){
                //unlink old file
                try{
                    unlink($slider->image);
                }catch (\Exception $e){

                }

                $slider->image = $uploadResponse[1];
            }
            $slider->main_title = $mainText;
            $slider->title = $request->input('title');
            $slider->sub_title = $request->input('sub_title');
            $slider->donate = $request->input('donate')==='yes'?true:false;
            $slider->menu = $request->input('menu')==='yes'?true:false;
            $slider->update();

            return back()->withMessage('Slider Updated');
        }

        return redirect()->route('slider.index')->withErrors(['Resource not found']);

    }

    public function show($uuid){
        $slider = Slider::where('uuid', $uuid)->first();
        if(!empty($slider)){

            return view('admin.pages.sliders.edit')->with(['slider'=>$slider]);
        }

        return back()->withErrors(['Resource not found']);
    }

    public function toggle($uuid){
        $slider = Slider::where('uuid', $uuid)->first();
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
            $image->uuid = $this->getId("ImG", 25);
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

    public function popSingleImage(Request $request, $uuid) {
        $name = $request->input('filename');
        $imageUploaded = ImageUpload::where('uuid', $uuid)->first();
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
