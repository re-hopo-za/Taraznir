<?php

return [

    'label' => 'گروه مشتریان',

    'plural_label' => 'گروه های مشتری',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
        'default' => [
            'label' => 'پیش فرض',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
        'default' => [
            'label' => 'پیش فرض',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این گروه مشتری را نمی توان حذف کرد زیرا مشتریان مرتبط هستند.',
            ],
        ],
    ],
];
