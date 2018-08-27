<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\AutoId;
use App\Traits\AutoIdInsertable;

class Title extends Model implements AutoId
{
    use AutoIdInsertable;
    
    protected $fillable = [
        'id',
        'name',
        'name_short',
        'name_eng',
        'name_eng_short',
        'gender'
    ];

    public $incrementing = false;
}
