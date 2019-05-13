<?php

namespace App\Repositories\Director;

use App\Models\Director;
use App\Repositories\BaseRepository;
use App\Repositories\Director\DirectorRepositoryInterface;

class DirectorRepository extends BaseRepository implements DirectorRepositoryInterface
{
    public function model()
    {
        return Director::class;
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
