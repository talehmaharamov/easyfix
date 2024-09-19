<?php

namespace App\Models\AutoGenerate;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use App\Models\AutoGenerate\Service;

class ServicePhoto extends Model
{
    protected $table = 'service_photos';
    public function parent()
    {
        $this->belongsTo(Service::class,'parent_id');
    }

    protected $guarded = [];
    public $timestamps = [];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll();
    }
}
