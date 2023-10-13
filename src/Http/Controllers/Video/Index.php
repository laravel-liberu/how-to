<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Video;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Http\Resources\Video as Resource;
use LaravelLiberu\HowTo\Models\Video;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Video::with(['poster', 'tags'])->get()
        );
    }
}
