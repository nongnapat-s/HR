<?php

namespace App\Http\Controllers;

use App\Title;
use App\Status;
use App\SelectItem;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Response List request
     *
     * @var string
     */
    public function getList($name)
    {
        switch ($name) {
            case 'race':
                $name = 'nation';
            case 'nation':
            case 'religion':
            case 'blood_group':
            case 'marital_status':
                return SelectItem::select('value', 'label')
                                 ->where('field', $name)
                                 ->orderBy('order')
                                 ->get();
            case 'status':
                return Status::select(
                                    'id as value',
                                    'name as label',
                                    'active',
                                    'category')
                                    ->get();
            case 'title':
                return Title::select(
                                    'id as value',
                                    'name_short as label',
                                    'name',
                                    'name_short',
                                    'name_eng',
                                    'name_eng_short',
                                    'gender')
                                    ->get();
            default:
                return [];
        }
    }
}