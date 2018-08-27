<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\AutoId;
use App\Traits\AutoIdInsertable;

class Person extends Model implements AutoId
{
    use AutoIdInsertable;

    protected $table = "persons";

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'UUID'];

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

    public function title() {
        return $this->belongsTo(Title::class);
    }
}
