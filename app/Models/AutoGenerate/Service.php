<?php

namespace App\Models\AutoGenerate;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Service extends Model implements TranslatableContract
{
    use Translatable, LogsActivity;

    protected $table = 'service';

    public $translatedAttributes = ['name','description','meta_description','meta_title','alt'];
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(ServicePhoto::class,'parent_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll();
    }
}
