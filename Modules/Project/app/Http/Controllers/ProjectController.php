<?php

namespace Modules\Project\app\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Core\app\Traits\CommonApiTrait;
use Modules\Project\app\Models\Project;

class ProjectController extends Controller
{
    use CommonApiTrait;

    public static string $model = Project::class;
}
