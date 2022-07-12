<?php

/**
 * @apiGroup           Post
 * @apiName            findPost
 *
 * @api                {GET} /v1/posts/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Post\UI\API\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('posts/{id}', [PostController::class, 'findPost'])
    ->name('api_post_find_post')
    ->middleware(['auth:api']);

