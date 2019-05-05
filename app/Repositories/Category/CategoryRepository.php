<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function model()
    {
        return Category::class;
    }

    public function getNameAll($column1, $column2)
    {
        return $this->_model->orderBy($column1)->pluck($column1, $column2);
    }


    public function whereNull($column, $orderColumn)
    {
        return $this->_model->whereNull($column)->orderBy($orderColumn)->get();
    }

    public function whereNotNull($column, $orderColumn)
    {
        return $this->_model->whereNotNull($column)->orderBy($orderColumn)->get();
    }

    public function wherePluck($column1, $value, $column2, $column3)
    {
        return $this->_model->where($column1, $value)->orderBy('id', 'DESC')->pluck($column2, $column3);
    }

    public function checkStatus($value)
    {
        $status = 0;
        if ($value != null) {
            $status = $value;
        }
        return $status;
    }

}
