<?php

return [

    'label' => 'برند',

    'plural_label' => 'برندها',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'products_count' => [
            'label' => 'شماره محصولات',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این نام تجاری را نمی توان حذف کرد زیرا داری محصولات هست.',
            ],
        ],
    ],
    'pages' => [
        'products' => [
            'label' => 'محصولات',
            'actions' => [
                'attach' => [
                    'label' => 'یک محصول اختصاص دهید',
                    'form' => [
                        'record_id' => [
                            'label' => 'محصول',
                        ],
                    ],
                    'notification' => [
                        'success' => 'اختصاص دادن محصول به برند',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'محصول جدا شد.',
                    ],
                ],
            ],
        ],
        'collections' => [
            'label' => 'دسته‌بندی‌ها',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'انتخاب دسته‌یندی',
                        ],
                    ],
                ],
            ],
            'actions' => [
                'attach' => [
                    'label' => 'اختصاص دادن دسته‌بندی',
                ],
            ],
        ],
    ],

];
