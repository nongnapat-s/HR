<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectItem extends Model
{
    /**
     * Config model not using auto id so, create() will return id value.
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'field',
        'value',
        'label',
        'order'
    ];
}
