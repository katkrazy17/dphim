<?php

namespace App\Repositories\Category;

use App\Repositories\BaseInterface;

interface CategoryRepositoryInterface extends BaseInterface
{

    public function getNameAll($column1, $column2);

    public function whereNull($column, $orderColumn);

    public function whereNotNull($column, $orderColumn);

    public function wherePluck($column1, $value, $column2, $column3);

    public function checkStatus($value);

}
