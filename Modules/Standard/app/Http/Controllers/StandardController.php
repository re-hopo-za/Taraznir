<?php

namespace Modules\Standard\app\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Core\app\Traits\CommonApiTrait;
use Modules\Standard\app\Models\Standard;

class StandardController extends Controller
{
    use CommonApiTrait;

    public static string $model = Standard::class;

}
