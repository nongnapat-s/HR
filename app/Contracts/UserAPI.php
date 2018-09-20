<?php

namespace App\Contracts;

interface UserAPI
{

    /**
     * Query user data from api by organization id.
     *
     * @param $orgId
     * @return array
     */
    public function getUser($orgId);

    /**
     * Authenticate user via SSO api.
     *
     * @param array
     * @return array
     */
    public function authenticate(array $data);
}
