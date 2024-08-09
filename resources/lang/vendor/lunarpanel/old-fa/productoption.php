<?php

return [

    'label' => 'گزینه محصول',

    'plural_label' => 'گزینه های محصول',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'label' => [
            'label' => 'برچسب',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
        'shared' => [
            'label' => 'به اشتراک گذاشته شده است',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'label' => [
            'label' => 'برچسب',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => 'محصول  متغیر ذخیره شد',
                    ],
                ],
            ],
            'actions' => [
                'cancel' => [
                    'label' => 'لغو کردن',
                ],
                'save-options' => [
                    'label' => 'ذخیره گزینه ها',
                ],
                'add-shared-option' => [
                    'label' => 'افزودن گزینه اشتراکی',
                    'form' => [
                        'product_option' => [
                            'label' => 'گزینه محصول',
                        ],
                        'no_shared_components' => [
                            'label' => 'هیچ گزینه مشترکی در دسترس نیست.',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => 'افزودن گزینه',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading' => 'هیچ گزینه محصول پیکربندی نشده است',
                    'description' => 'برای شروع تولید برخی از انواع، یک گزینه محصول مشترک یا محدود اضافه کنید.',
                ],
            ],
            'options-table' => [
                'title' => 'گزینه های محصول',
                'configure-options' => [
                    'label' => 'پیکربندی گزینه ها',
                ],
                'table' => [
                    'option' => [
                        'label' => 'گزینه',
                    ],
                    'values' => [
                        'label' => 'مقدار',
                    ],
                ],
            ],
            'variants-table' => [
                'title' => 'محصول متغیر',
                'actions' => [
                    'create' => [
                        'label' => 'ایجاد محصول متغیر',
                    ],
                    'edit' => [
                        'label' => 'ویراستن',
                    ],
                    'delete' => [
                        'label' => 'حذف کردن',
                    ],
                ],
                'empty' => [
                    'heading' => 'هیچ گونه‌ای پیکربندی نشده است',
                ],
                'table' => [
                    'new' => [
                        'label' => 'جدید',
                    ],
                    'option' => [
                        'label' => 'گزینه',
                    ],
                    'sku' => [
                        'label' => 'SKU',
                    ],
                    'price' => [
                        'label' => 'قیمت',
                    ],
                    'stock' => [
                        'label' => 'موجودی',
                    ],
                ],
            ],
        ],
    ],

];
