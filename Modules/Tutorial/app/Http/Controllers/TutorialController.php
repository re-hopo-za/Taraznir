<?php

namespace Modules\Tutorial\app\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\Core\app\Traits\CommonApiTrait;
use Modules\Tutorial\app\Models\Tutorial;

class TutorialController extends Controller
{
    use CommonApiTrait;

    public static string $model = Tutorial::class;
}
