<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\AutoId;
use App\Traits\AutoIdInsertable;

class Postcode extends Model implements AutoId
{
    use AutoIdInsertable;

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
        'id',
        'postcode',
        'province_id',
        'location'
    ];

    /**=========================*
     * Model's relations
     *==========================*/
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
