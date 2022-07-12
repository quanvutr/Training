<?php

namespace App\Containers\AppSection\Post\Actions;

use App\Containers\AppSection\Post\Tasks\GetAllPostTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllPostAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllPostTask::class)->addRequestCriteria()->run();
    }
}
