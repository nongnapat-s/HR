<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SelectItem;
class ListController extends Controller
{
    public function getList($name)
    {
        if ($name == 'nation') {
            $name = 'race';
        }
        return SelectItem::select(['value', 'label'])
                         ->where('field', $name)
                         ->orderBy('order')
                         ->get();
    }
}