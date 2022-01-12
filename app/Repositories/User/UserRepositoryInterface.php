<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function getInfoUserByEmail($email);
    public function getInfoUserById($id);
}