<?php

/**
 * @apiGroup           Post
 * @apiName            getAllPost
 *
 * @api                {GET} /v1/posts Endpoint title here..
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

Route::get('posts', [PostController::class, 'getAllPost'])
    ->name('api_post_get_all_post')
    ->middleware(['auth:api']);

