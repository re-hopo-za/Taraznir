<?php

namespace Modules\Core\app\Http\Controllers;

use Illuminate\Routing\Controller;

class ThemeController extends Controller
{
    public static array $models = [
        'Blog'  => 'مقاله',
        'Blogs' => 'مقاله‌های',
    ];
}
