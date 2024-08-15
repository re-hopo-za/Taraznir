<?php

use Lunar\Models\Url;

function ecommerce_trans($keyword): string
{
    return __("ecommerce::product.$keyword");
}


function fetch_url($slug, $type, $eagerLoad = []): ?Url
{
    return Url::whereElementType($type)
        ->whereDefault(true)
        ->whereSlug($slug)
        ->with($eagerLoad)->first();
}
