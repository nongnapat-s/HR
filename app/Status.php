<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\AutoId;
use App\Traits\AutoIdInsertable;

class Status extends Model implements AutoId
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
        'active',
        'category'
    ];

    /**=========================*
     * Model's relations
     *==========================*/
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
