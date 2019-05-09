<?php

namespace App\Repositories\Advertisement;

use App\Models\Advertisement;
use App\Repositories\BaseRepository;
use App\Repositories\Advertisement\AdvertisementRepositoryInterface;

class AdvertisementRepository extends BaseRepository implements AdvertisementRepositoryInterface
{
    public function model()
    {
        return Advertisement::class;
    }
    public function checkStatus($value)
    {
        $status = 0;
        if ($value != null) {
            $status = $value;
        }
        return $status;
    }
    public function update(array $attributes, $id)
    {
        $_model = $this->_model->findOrFail($id);
        $_model->fill($attributes);
        $_model->save();

        return $this;
    }
}
