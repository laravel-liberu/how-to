<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Tag;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Http\Requests\ValidateTag;
use LaravelLiberu\HowTo\Models\Tag;

class Update extends Controller
{
    public function __invoke(ValidateTag $request, Tag $tag)
    {
        $tag->update($request->validated());
    }
}
