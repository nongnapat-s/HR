<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\AutoId;
use App\Traits\AutoIdInsertable;

class Title extends Model implements AutoId
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
        'name',
        'name_short',
        'name_eng',
        'name_eng_short',
        'gender'
    ];

    /**=========================*
     * Model's relations
     *==========================*/
    public function persons()
    {
        return $this->hasMany(Person::class);
    }
}
