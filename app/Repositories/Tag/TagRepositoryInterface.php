<?php

namespace App\Repositories\Tag;

use App\Repositories\BaseInterface;

//use Your Model

/**
 * Class TagRepositoryInterface.
 */
interface TagRepositoryInterface extends BaseInterface
{
    public function checkStatus($value);
}
