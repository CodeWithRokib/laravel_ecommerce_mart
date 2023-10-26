<?php


namespace App\helper;
use Intervention\Image\Facades\Image;

class Helper
{
    public static function uploadFile($fileObject, $directory, $existFileUrl = null, $resizeWidth = null, $resizeHeight = null, $lowQuality = false)
    {
        if ($fileObject) {
            if ($existFileUrl) {
                if (file_exists($existFileUrl)) {
                    unlink($existFileUrl);
                }
            }
            $fileName = time() . rand(10, 1000) . $fileObject->getClientOriginalName();
            $fileDirectory = 'admin/assets/images/upload-images/' . $directory . '/';
            $fileObject->move($fileDirectory, $fileName);
            $fileUrl = $fileDirectory . $fileName;

            $resizeWidth = 10;  // Adjust the width as needed
            $resizeHeight = 10; // Adjust the height as needed
            // Resize the image if dimensions are provided

            // if ($resizeWidth && $resizeHeight) {
            //     $image = Image::make($fileUrl);
            //     $image->resize($resizeWidth, $resizeHeight);
            //     $image->save($fileUrl);
            // }

            // Convert to low quality if requested
            if ($lowQuality) {
                $image = Image::make($fileUrl);
                $image->encode('jpg', 40); // Adjust quality (10 is just an example)
                $image->save($fileUrl);
            }
        } else {
            if ($existFileUrl) {
                $fileUrl = $existFileUrl;
            } else {
                $fileUrl = null;
            }
        }

        return $fileUrl;
    }
}