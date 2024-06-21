<?php

namespace Modules\Service\app\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\Core\app\Traits\CommonApiTrait;
use Modules\Service\app\Models\Service;

class ServiceController extends Controller
{
    use CommonApiTrait;

    public static string $model = Service::class;
}
