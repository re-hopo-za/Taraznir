<?php

return [

    'label' => 'دسته‌بندی',

    'plural_label' => 'دسته‌بندی‌ها',

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
    ],

    'pages' => [
        'children' => [
            'label' => 'زیر دسته‌بندی‌',
            'actions' => [
                'create_child' => [
                    'label' => 'ساخت زیر دسته‌بندی',
                ],
            ],
            'table' => [
                'children_count' => [
                    'label' => 'شماره زیر دسته‌بندی‌',
                ],
                'name' => [
                    'label' => 'نام',
                ],
            ],
        ],
        'edit' => [
            'label' => 'اطلاعات پایه',
        ],
        'media' => [
            'label' => 'رسانه ها',
        ],
        'products' => [
            'label' => 'محصولات',
            'actions' => [
                'attach' => [
                    'label' => 'اختصاص دادن محصول',
                ],
            ],
        ],
    ],

];
