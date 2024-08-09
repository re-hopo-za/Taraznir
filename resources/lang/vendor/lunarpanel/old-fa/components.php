<?php

return [
    'tags' => [
        'notification' => [

            'updated' => 'برچسب ها به روز شد',

        ],
    ],

    'activity-log' => [

        'input' => [

            'placeholder' => 'یک نظر اضافه کنید',

        ],

        'action' => [

            'add-comment' => 'اضافه کردن نظر',

        ],

        'system' => 'System',

        'partials' => [
            'orders' => [
                'order_created' => 'سفارش ایجاد شد',

                'status_change' => 'وضعیت به روز شد',

                'capture' => 'پرداخت :amount در کارت پایان :last_four',

                'authorized' => 'احراز هویت :amount در کارت پایان :last_four',

                'refund' => 'بازپرداخت :amount در کارت پایان :last_four',

                'address' => ':type بروز شد',

                'billingAddress' => 'آدرس صورتحساب',

                'shippingAddress' => 'آدرس حمل و نقل',
            ],

            'update' => [
                'updated' => ':model بروز شد',
            ],

            'create' => [
                'created' => ':model ساخته شد',
            ],

            'tags' => [
                'updated' => 'برچسب بروز شد',
                'added' => 'اضافه شد',
                'removed' => 'حذف شد',
            ],
        ],

        'notification' => [
            'comment_added' => 'نظر اضافه شد',
        ],

    ],

    'forms' => [
        'youtube' => [
            'helperText' => 'شناسه ویدیوی YouTube را وارد کنید. e.g. dQw4w9WgXcQ',
        ],
    ],

    'collection-tree-view' => [
        'actions' => [
            'move' => [
                'form' => [
                    'target_id' => [
                        'label' => 'دسته‌بندی والد',
                    ],
                ],
            ],
        ],
        'notifications' => [
            'collections-reordered' => [
                'success' => 'دسته‌بندی دوباره مرتب کردن',
            ],
            'node-expanded' => [
                'danger' => 'بارگیری دسته‌بندی ممکن نیست',
            ],
            'delete' => [
                'danger' => 'حذف دسته‌بندی ممکن نیست',
            ],
        ],
    ],

    'product-options-list' => [
        'add-option' => [
            'label' => 'افزودن گزینه',
        ],
        'delete-option' => [
            'label' => 'گزینه حذف',
        ],
        'remove-shared-option' => [
            'label' => 'گزینه مشترک را حذف کنید',
        ],
        'add-value' => [
            'label' => 'ارزش دیگری اضافه کنید',
        ],
        'name' => [
            'label' => 'نام',
        ],
        'values' => [
            'label' => 'مقادیر',
        ],
    ],
];
