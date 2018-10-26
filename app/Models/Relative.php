<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id',
        'relative_id',
        'relation'
    ];

    /**=========================*
     * Model's relations
     *==========================*/
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function relative()
    {
        return $this->belongsTo(Person::class);
    }

    /**
     * Helper for get relation code.
     *
     * @var string
     */
    public function getRelationCode($relation)
    {
        return isset(config('constants.relations')[$relation]) ? config('constants.relations')[$relation] : 0;
    }
}
