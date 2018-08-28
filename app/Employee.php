<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'UUID'];

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
        'org_id' ,
        'extra_title_id' ,
        'academic_title_id' ,
        'status_id'
    ];

    public function personality()
    {
        return $this->hasOne(Person::class, 'id');
    }
}
