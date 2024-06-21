<?php

namespace Modules\News\app\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\Core\app\Traits\CommonApiTrait;
use Modules\News\app\Models\News;

class NewsController extends Controller
{
    use CommonApiTrait;

    public static string $model = News::class;
}
