<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Video;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Http\Requests\ValidateVideo;
use LaravelLiberu\HowTo\Models\Video;

class Store extends Controller
{
    public function __invoke(ValidateVideo $request, Video $video)
    {
        return $video->store(
            $request->file('video'),
            $request->validatedExcept('video')
        );
    }
}
