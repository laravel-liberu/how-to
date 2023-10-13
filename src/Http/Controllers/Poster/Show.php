<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Poster;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Models\Poster;

class Show extends Controller
{
    public function __invoke(Poster $poster)
    {
        return $poster->file->inline();
    }
}
