<?php

namespace App\Containers\AppSection\Post\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class TopicRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
