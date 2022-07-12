<?php

/**
 * @apiGroup           UpdatePost
 * @apiName            UpdatePost
 *
 * @api                {PUT} /v1/posts Endpoint title here..
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

use App\Containers\AppSection\UpdatePost\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::put('posts', [Controller::class, 'UpdatePost'])
    ->name('api_updatepost_update_post')
    ->middleware(['auth:api']);

