<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Uuid extends Model
{
    use HasFactory;
    // protected $table = "uuid";

    protected $primarykey = 'uuid';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            if (!$model->getKey()){
                $model->{$model->getKeyName()}=(string) Str::uuid();
            }
        });
    }

    public function GetIncrementing()
    {
        return false;
    }
}
