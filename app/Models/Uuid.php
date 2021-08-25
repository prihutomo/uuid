<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Uuid extends Model
{
    use HasFactory;
    // protected $table = "uuid"; //selama menggunakan bahasa inggris table tidak usah di table

    protected $primarykey = 'uuid'; //uuid bukan primary key

    protected static function boot()
    {
        parent::boot();

//         static::creating(function ($model){
//             if (!$model->getKey()){
//                 $model->{$model->getKeyName()}=(string) Str::uuid();
//             }
//         });
        //salah semua
    }

    public function GetIncrementing()
    {
        return false;
    }
}
