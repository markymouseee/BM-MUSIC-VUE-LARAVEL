<?php

namespace App\Service;

use App\Models\User;

class UserService
{
    /**
     * Summary of register
     * @param array $data
     *
     * @return User
     */
    public function register(array $data): User
    {
        $user = User::create($data);

        return $user;
    }
}
