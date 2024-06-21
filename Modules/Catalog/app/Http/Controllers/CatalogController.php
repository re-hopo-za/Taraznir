<?php

namespace Modules\Catalog\app\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Catalog\app\Models\Catalog;
use Modules\Core\app\Traits\CommonApiTrait;

class CatalogController extends Controller
{
    use CommonApiTrait;

    public static string $model = Catalog::class;

}
