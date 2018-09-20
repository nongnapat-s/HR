<?php

namespace App\Services;

class EmployeeManager
{
    public static function getUser($id)
    {
        return resolve('App\Contracts\UserAPI')->getUser($id);
    }
}
