<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Video;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Models\Video;

class Show extends Controller
{
    public function __invoke(Video $video)
    {
        return $video->file->inline();
    }
}
