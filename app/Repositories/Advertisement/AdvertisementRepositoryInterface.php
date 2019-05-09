<?php

namespace App\Repositories\Advertisement;

use App\Repositories\BaseInterface;

interface AdvertisementRepositoryInterface extends BaseInterface
{


    public function checkStatus($value);

    public function update(array $attributes, $id);

}
