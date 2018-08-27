<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\AutoId;
use App\Traits\AutoIdInsertable;

class Province extends Model implements AutoId
{
    use AutoIdInsertable;

    protected $fillable = [
        'id',
        'name',
        'region'
    ];

    public $incrementing = false;

    public function postcodes() {
        return $this->hasMany(Postcode::class);
    }
}
