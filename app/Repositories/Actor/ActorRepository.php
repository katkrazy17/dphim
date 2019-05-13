<?php

namespace App\Repositories\Actor;

use App\Models\Actor;
use App\Repositories\BaseRepository;
use App\Repositories\Actor\ActorRepositoryInterface;

class ActorRepository extends BaseRepository implements ActorRepositoryInterface
{
    public function model()
    {
        return Actor::class;
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
