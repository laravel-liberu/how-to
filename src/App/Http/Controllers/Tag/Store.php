<?php

namespace LaravelEnso\HowTo\App\Http\Controllers\Tag;

use Illuminate\Routing\Controller;
use LaravelEnso\HowTo\App\Http\Requests\ValidateTagRequest;
use LaravelEnso\HowTo\App\Models\Tag;

class Store extends Controller
{
    public function __invoke(ValidateTagRequest $request, Tag $tag)
    {
        return $tag->create(['name' => $request->get('name')]);
    }
}