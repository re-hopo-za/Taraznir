<?php

return [
    'collections' => [
        'create_root' => [
            'label' => 'ایجاد دسته‌بندی اصلی',
        ],
        'create_child' => [
            'label' => 'ایجاد زیر دسته‌بندی',
        ],
        'move' => [
            'label' => 'انتقال دسته‌بندی',
        ],
        'delete' => [
            'label' => 'حذف دسته‌بندی',
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'بروزرسانی وضعیت',
            'wizard' => [
                'step_one' => [
                    'label' => 'وضعیت',
                ],
                'step_two' => [
                    'label' => 'ایمیل‌ها و اعلان‌ها',
                    'no_mailers' => 'هیچ ایمیلی برای این وضعیت موجود نیست.',
                ],
                'step_three' => [
                    'label' => 'پیش نمایش و ذخیره',
                    'no_mailers' => 'هیچ ایمیلی برای پیش نمایش انتخاب نشده است.',
                ],
            ],
            'notification' => [
                'label' => 'وضعیت سفارش به روز شد',
            ],
            'billing_email' => [
                'label' => 'ایمیل صورتحساب',
            ],
            'shipping_email' => [
                'label' => 'ایمیل حمل و نقل',
            ],
        ],

    ],
];
