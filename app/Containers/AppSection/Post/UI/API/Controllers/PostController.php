<?php

namespace App\Containers\AppSection\Post\UI\API\Controllers;

use App\Containers\AppSection\Post\Actions\CreatePostAction;
use App\Containers\AppSection\Post\Actions\DeletePostAction;
use App\Containers\AppSection\Post\Actions\FindPostByIdAction;
use App\Containers\AppSection\Post\Actions\GetAllPostAction;
#use App\Containers\AppSection\Post\Actions\GetAllPostsAction;
use App\Containers\AppSection\Post\Actions\UpdatePostAction;
use App\Containers\AppSection\Post\UI\API\Requests\CreatePostRequest;
use App\Containers\AppSection\Post\UI\API\Requests\DeletePostRequest;
use App\Containers\AppSection\Post\UI\API\Requests\FindPostRequest;
use App\Containers\AppSection\Post\UI\API\Requests\GetAllPostRequest;
use App\Containers\AppSection\Post\UI\API\Requests\UpdatePostRequest;
use App\Containers\AppSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Parents\Controllers\ApiController;

class PostController extends ApiController
{
    public function createPost(CreatePostRequest $request)
    {
        $post = app(CreatePostAction::class)->run($request);
        return $this->transform($post, PostTransformer::class);
    }

    public function getAllPost(GetAllPostRequest $request)
    {
        $post = app(GetAllPostAction::class)->run($request);
        return $this->transform($post, PostTransformer::class);
    }
    public function updatePost(UpdatePostRequest $request)
    {
        $post = app(UpdatePostAction::class)->run($request);
        return $this->transform($post, PostTransformer::class);
    }
    public function deletePost(DeletePostRequest $request)
    {
        $post = app(DeletePostAction::class)->run($request);
        //return $this->noContent();
        return $this->json("Successful!");
    }
    public function findPost(FindPostRequest $request)
    {
        $post = app(FindPostByIdAction::class)->run($request);
        return $this->transform($post,PostTransformer::class);
    }
}
