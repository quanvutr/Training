<?php

namespace App\Containers\AppSection\Post\UI\API\Transformers;

use App\Containers\AppSection\Post\Models\Post;
use App\Ship\Parents\Transformers\Transformer;

class PostTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected array $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected array $availableIncludes = [

    ];

    public function transform(Post $post): array
    {
        $response = [
            'object' => $post->getResourceKey(),
            'id' => $post->getHashedKey(),
            'title' => $post->title,
            'content' => $post->content,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
        ];

        return $response = $this->ifAdmin([
            'real_id'    => $post->id,
            // 'deleted_at' => $post->deleted_at,
        ], $response);
    }
}
