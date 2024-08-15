<?php

function ecommerce_trans($keyword): string
{
    return __("ecommerce::product.$keyword");
}


function product_name($item): null|string
{
    return $item->translateAttribute('name');
}


function product_slug($item): null|string
{
    return '/product/'. $item->urls?->first()?->slug;
}


function product_cover($item): null|string
{
    return $item->getMedia('images')?->first()?->getFullUrl();
}


function product_price($item): int|string
{
    if($price = (int) $item->prices->first()?->priceExTax()?->value)
        return number_format($price)." تومان ";

    return "تماس بگیرید";
}


function product_stock($item): null|string
{
    if($item->variants->first()?->stock)
        return ecommerce_trans('Available');

    return ecommerce_trans('Out of stock');
}
