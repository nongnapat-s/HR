<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";
    protected $fillable = [
        'id',
        'title_id',
        'first_name',
        'first_name_eng',
        'last_name',
        'last_name_eng',
        'middle_name',
        'middle_name_eng',
        'nickname',
        'dob',
        'gender',
        'blood_group',
        'race',
        'nation',
        'religion',
        'marital_status',
        'document_no',
        'career',
        'contact_address',
        'contact_postcode_id',
        'contact_phone_no',
        'potrait',
        'alive',
    ];
}
