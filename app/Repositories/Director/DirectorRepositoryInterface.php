<?php

namespace App\Repositories\Director;

use App\Repositories\BaseInterface;

interface DirectorRepositoryInterface extends BaseInterface
{


    public function checkStatus($value);

    public function update(array $attributes, $id);

}
