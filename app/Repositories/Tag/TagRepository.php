<?php

namespace App\Repositories\Tag;

use App\Models\Tag;
use App\Repositories\BaseRepository;
use App\Repositories\Tag\TagRepositoryInterface;

/**
 * Class TagRepository.
 */
class TagRepository extends BaseRepository  implements TagRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Tag::class;
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
