<?php

namespace App\Traits;

trait UploadImage
{
    public function saveImage($file, $path)
    {
        $imageName = null;
        if ($file) {
            $imageName = $file->getClientOriginalName();
            $file->move(public_path($path), $imageName);
        }
        return $imageName;
    }
}
