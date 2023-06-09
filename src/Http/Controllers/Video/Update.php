<?php

namespace LaravelEnso\HowTo\Http\Controllers\Video;

use Illuminate\Routing\Controller;
use LaravelEnso\HowTo\Http\Requests\ValidateVideo;
use LaravelEnso\HowTo\Models\Video;

class Update extends Controller
{
    public function __invoke(ValidateVideo $request, Video $video)
    {
        tap($video)->update($request->validatedExcept('tagList'))
            ->syncTags($request->get('tagList'));

        return ['message' => __('The video was updated successfully')];
    }
}
