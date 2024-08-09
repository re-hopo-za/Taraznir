<?php

return [

    'label' => 'محصول',

    'plural_label' => 'محصولات',

    'status' => [
        'unpublished' => [
            'content' => 'در حال حاضر در وضعیت پیش‌نویس، این محصول در همه کانال‌ها و گروه‌های مشتریان پنهان است.',
        ],
        'availability' => [
            'customer_groups' => 'این محصول در حال حاضر برای همه گروه های مشتری در دسترس نیست.',
            'channels' => 'این محصول در حال حاضر برای همه کانال ها در دسترس نیست.',
        ],
    ],

    'table' => [
        'status' => [
            'label' => 'وضعیت',
            'states' => [
                'deleted' => 'حذف شده',
                'draft' => 'پیش نویس',
                'published' => 'منتشر شده',
            ],
        ],
        'name' => [
            'label' => 'نام',
        ],
        'brand' => [
            'label' => 'برند',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'stock' => [
            'label' => 'موجودی',
        ],
        'producttype' => [
            'label' => 'نوع محصول',
        ],
    ],

    'actions' => [
        'edit_status' => [
            'label' => 'به روز رسانی وضعیت',
            'heading' => 'به روز رسانی وضعیت',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'brand' => [
            'label' => 'برند',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'producttype' => [
            'label' => 'نوع محصول',
        ],
        'status' => [
            'label' => 'وضعیت',
            'options' => [
                'published' => [
                    'label' => 'منتشر شده',
                    'description' => 'این محصول در تمام گروه‌ها و کانال‌های مشتریان فعال در دسترس خواهد بود',
                ],
                'draft' => [
                    'label' => 'Draft',
                    'description' => 'این محصول در تمام کانال‌ها و گروه‌های مشتریان پنهان می‌شود',
                ],
            ],
        ],
        'tags' => [
            'label' => 'برچسب‌ها',
        ],
        'collections' => [
            'label' => 'دسته‌بندی‌ها',
        ],
    ],

    'pages' => [
        'availability' => [
            'label' => 'در دسترس بودن',
        ],
        'media' => [
            'label' => 'رسانه ها',
        ],
        'identifiers' => [
            'label' => 'شناسه های محصول',
        ],
        'inventory' => [
            'label' => 'فهرست',
        ],
        'pricing' => [
            'form' => [
                'tax_class_id' => [
                    'label' => 'طبقه مالیاتی',
                ],
                'tax_ref' => [
                    'label' => 'مرجع مالیاتی',
                    'helper_text' => 'اختیاری، برای ادغام با سیستم های شخص ثالث.',
                ],
            ],
        ],
        'shipping' => [
            'label' => 'حمل و نقل',
        ],
        'variants' => [
            'label' => 'متغیر',
        ],
        'collections' => [
            'label' => 'دسته‌بندی‌ها',
        ],
        'associations' => [
            'label' => 'انجمن های محصول',
        ],
    ],

];
