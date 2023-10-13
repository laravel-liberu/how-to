<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Tag;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Models\Tag;

class Destroy extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();
    }
}
