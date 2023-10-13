<?php

namespace LaravelLiberu\HowTo\Http\Controllers\Poster;

use Illuminate\Routing\Controller;
use LaravelLiberu\HowTo\Models\Poster;

class Destroy extends Controller
{
    public function __invoke(Poster $poster)
    {
        $poster->delete();

        return ['message' => __('The poster was deleted successfully')];
    }
}
