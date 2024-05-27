<?php

namespace App\Traits\Traits;

trait UploadFile
{
    public function upload($imgFile, $path){
        $imgExt = $imgFile->getClientOriginalExtension();
        $fileName = time() . '.' . $imgExt;
        //$path = 'assets/clientsImages';
        $imgFile->move($path, $fileName);
        return $fileName;
    }
}
