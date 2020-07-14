<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use App\Traits\General\Utility;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    use Utility;
    public function uploadImages(Request $request, $model_id) {



        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $dir = "data/uploads";
        $image->move(public_path($dir),$imageName);
        $image = new ImageUpload();
        $image->url = $dir."/".$imageName;
        $image->uuid = $this->createUuid();
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
