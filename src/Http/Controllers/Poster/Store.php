<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Poster;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Http\Requests\ValidatePoster;
use LaravelLiberu\HowTo\Models\Poster;

class Store extends Controller
{
    public function __invoke(ValidatePoster $request, Poster $poster)
    {
        return $poster->store($request->get('videoId'), $request->file('poster'));
    }
}
