<?php

namespace App\Services;

use App\Models\Lists\Title;
use App\Models\Lists\Status;
use App\Models\Lists\Postcode;
use App\Models\Lists\Province;
use App\Models\Lists\SelectItem;

class ListManager
{
    protected $list = '';
    protected $search = '';

    public function __construct($list, $search = "")
    {
        $this->list = $list;
        $this->search = $search;
    }

    public function getList()
    {
        switch ($this->list) {
            case 'race':
                $this->list = 'nation';
            case 'nation':
            case 'religion':
            case 'blood_group':
            case 'marital_status':
                return $this->getSelectItems();
            case 'status':
                return $this->getStatuses();
            case 'prefix-male':
                return $this->getTitles(1);
            case 'prefix-female':
                return $this->getTitles(0);
            case 'postcode':
                return $this->getPostcodes(1);
            case 'province':
                return $this->getProvinces(1);
            default:
                return [];
        }
    }

    public function getDevbridgeAutocomplete()
    {
        switch ($this->list) {
            case 'postcode':
                return $this->getDevbridgeAutocompleteComplatibleSuggesions($this->getPostcodes()->toArray());
            case 'province':
                return $this->getDevbridgeAutocompleteComplatibleSuggesions($this->getProvinces()->toArray());
            default:
                return [];
        }
    }

    protected function getSelectItems()
    {
        return SelectItem::select('value', 'label')
                           ->where('field', $this->list)
                           ->orderBy('order')
                           ->get();
    }

    protected function getStatuses()
    {
        return Status::select(
                        'id as value',
                        'name as label',
                        'active','category')
                       ->get();
    }

    protected function getTitles($gender)
    {
        return Title::select(
                        'id as value',
                        'name_short as label',
                        'name',
                        'name_short',
                        'name_eng',
                        'name_eng_short',
                        'titled')
                      ->where('gender', $gender)
                      ->orWhere('gender', 2)
                      ->get();
    }

    protected function getPostcodes()
    {
        return Postcode::select(
                            'id as value',
                            'province_id',
                            'location as label')
                         ->where('location', 'like', '%' . $this->search . '%')
                         ->limit(20)
                         ->orderBy('location')
                         ->get();
    }

    protected function getProvinces()
    {
        return Province::select(
                            'id as value',
                            'name as lable',
                            'region')
                         ->where('name', 'like', '%' . $this->search . '%')
                         ->limit(20)
                         ->orderBy('name')
                         ->get();
    }

    protected function getDevbridgeAutocompleteComplatibleSuggesions($items)
    {
        array_walk($items, function (&$item) {
            $item['data'] = $item['value'];
            unset($item['value']);
            $item['value'] = $item['label'];
            unset($item['label']);
        });

        return ['suggestions' => $items];
    }
}