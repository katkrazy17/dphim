<?php

namespace App\Repositories\Actor;

use App\Repositories\BaseInterface;

interface ActorRepositoryInterface extends BaseInterface
{


    public function checkStatus($value);

    public function update(array $attributes, $id);

}
