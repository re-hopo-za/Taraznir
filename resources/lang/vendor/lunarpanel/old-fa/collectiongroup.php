<?php

return [

    'label' => 'گروه دسته‌بندی',

    'plural_label' => 'گروه‌های دسته‌بندی',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
        'collections_count' => [
            'label' => 'بدون گروه‌های دسته‌بندی',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این گروه مجموعه را نمی توان حذف کرد زیرا مجموعه هایی مرتبط هستند.',
            ],
        ],
    ],
];
