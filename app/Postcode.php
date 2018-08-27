<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use App\Contracts\AutoId;
use App\Traits\AutoIdInsertable;

class Postcode extends Model implements AutoId
{
    use AutoIdInsertable;

    protected $fillable = [
        'id',
        'postcode',
        'province_id',
        'location'
    ];

    public $incrementing = false;

    public function province() {
        return $this->belongsTo(Province::class);
    }
}
