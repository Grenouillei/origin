<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileService
{

    public static function store($path, $file, $name = null){
        if ($name)
            return Storage::disk('public')->putFileAs($path,$file,$name);
        else
            return Storage::disk('public')->put($path,$file);
    }

}
