<?php

namespace App\Containers\AppSection\Post\UI\API\Transformers;

use App\Containers\AppSection\Post\Models\Post;
use App\Containers\AppSection\Post\Models\Topic;
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
        #echo $topic->topicId;
        $response = [
            'object' => $post->getResourceKey(),
            'id' => $post->getHashedKey(),
            'title' => $post->title,
            'content' => $post->content,
            #'created by id' => $post->created_by_id,
            'created by' => $post->createdBy->name,
            #'topic id' => $post->topic_id,
            'topic name' => $post->topicId->name,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
        ];

        return $response = $this->ifAdmin([
            'real_id'    => $post->id,
            // 'deleted_at' => $post->deleted_at,
        ], $response);
    }
}
