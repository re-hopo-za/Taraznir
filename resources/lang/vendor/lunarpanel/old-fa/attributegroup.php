<?php

return [

    'label' => 'گروه ویژگی',

    'plural_label' => 'گروه‌های ویژگی',

    'table' => [
        'attributable_type' => [
            'label' => 'نوع',
        ],
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
        'position' => [
            'label' => 'موقعیت',
        ],
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'نوع',
        ],
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
        'position' => [
            'label' => 'موقعیت',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این گروه ویژگی را نمی توان حذف کرد زیرا ویژگی های مرتبط وجود دارد.',
            ],
        ],
    ],
];
