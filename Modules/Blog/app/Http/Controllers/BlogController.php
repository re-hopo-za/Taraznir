<?php

namespace Modules\Blog\app\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Blog\app\Models\Blog;
use Modules\Core\app\Traits\CommonApiTrait;

class BlogController extends Controller
{
    use CommonApiTrait;

    public static string $model = Blog::class;

}
