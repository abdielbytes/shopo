<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Shop extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot () 
    {
        parent::boot();
        static::creating(function ($model) {
            if(empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function owner() 
    {
        return $this->hasOne(User::class);
    }
}
