<?php

namespace App\Models\AutoGenerate;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceTranslation extends Model
{
    use LogsActivity;
    public $timestamps = false;
    protected $table = 'service_translations';

    protected $fillable = [
       'parent_id',
       'locale',
       'name',
       'description',
       'short_description',
       'meta_title',
       'meta_description',
       'alt',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll();
    }
}