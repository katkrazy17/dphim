<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseInterface;

interface AdminRepositoryInterface extends BaseInterface
{
    public function login(array $attributes, $remember);

    public function logout();

    public function changePassword($pass_old, $pass_new);
}
