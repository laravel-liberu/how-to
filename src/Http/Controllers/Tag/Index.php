<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Tag;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Http\Resources\Tag as Resource;
use LaravelLiberu\HowTo\Models\Tag;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(Tag::all());
    }
}
