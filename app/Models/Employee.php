<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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
        'id',
        'org_id' ,
        'extra_title_id' ,
        'academic_title_id' ,
        'status_id'
    ];

    /**=========================*
     * Model's relations
     *==========================*/
    public function personality()
    {
        return $this->hasOne(Person::class, 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
