<?php

namespace App\Utils\Traits;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

trait GeneralTrait
{
    public function uploadNewPhotos($data,$request,$model,$folder): void
    {
        $modelName = '\\App\Models\\' . $model;
        if ($request->hasFile('photos')) {
            foreach (multi_upload($folder, $request->file('photos')) as $photo) {
                $blogPhoto = new $modelName();
                $blogPhoto->photo = $photo;
                $data->photos()->save($blogPhoto);
            }
        }
    }
    public function updateExistsPhoto($request,$data,$folder): void
    {
        if ($request->hasFile('photo')) {
            if (file_exists($data->photo)) {
                unlink(public_path($data->photo));
            }
            $data->photo = upload($folder,$request->file('photo'));
        }
    }
}
