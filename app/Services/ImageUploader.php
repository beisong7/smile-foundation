<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 08/08/2020
 * Time: 4:43 PM
 */

namespace App\Services;


use App\Traits\General\Utility;
use Illuminate\Http\Request;

class ImageUploader
{
    use Utility;

    public function upload(Request $request, $key){
        $photo = $request->file($key);

        $image = "";


        if (!empty($photo)) {

            $allowedFileExtension = ['jpg', 'png', 'bmp', 'jpeg'];

            // $filename = $photo->getClientOriginalName();


            $extension = $photo->getClientOriginalExtension();

            $extension = strtolower($extension);

            $size = $photo->getSize();

            if ($size > 1200000) {
                return [false, "This image is too large. Compress and try again."];
            }

            $check = in_array(strtolower($extension), $allowedFileExtension);

            $filename = $this->generateId("img", 10) . "." . $extension;

            if ($check) {

                $directory = 'uploads/images';
                $image = $directory . '/' . $filename;

//                $photo->storeAs($directory, $filename, 'public'); //unlock in live version
                $photo->move(public_path($directory) ,$filename);


                return [true, $image];

            } else {

                return [false, "Your passport must be of types : jpeg,bmp,png,jpg."];


            }
        }
        return [false, "No image file found"];
    }
}