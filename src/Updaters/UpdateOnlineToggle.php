<?php

namespace Spatie\Blender\Model\Updaters;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

trait UpdateOnlineToggle
{
    protected function updateOnlineToggle(Model $model, FormRequest $request)
    {
        $model->online = $request->get('online') ?? false;
    }
}
