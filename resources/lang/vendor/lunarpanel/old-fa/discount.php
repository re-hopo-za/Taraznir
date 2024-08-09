<?php

return [
    'plural_label' => 'تخفیف',
    'label' => 'تخفیف',
    'form' => [
        'conditions' => [
            'heading' => 'شرایط',
        ],
        'buy_x_get_y' => [
            'heading' => 'خرید X دریافت Y',
        ],
        'amount_off' => [
            'heading' => 'مقدار تخفیف',
        ],
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'بکار بردن',
        ],
        'starts_at' => [
            'label' => 'تاریخ شروع',
        ],
        'ends_at' => [
            'label' => 'تاریخ اتمام',
        ],
        'priority' => [
            'label' => 'Priority',
            'helper_text' => 'ابتدا تخفیف هایی با اولویت بالاتر اعمال می شود.',
            'options' => [
                'low' => [
                    'label' => 'کم',
                ],
                'medium' => [
                    'label' => 'کم',
                ],
                'high' => [
                    'label' => 'زیاد',
                ],
            ],
        ],
        'stop' => [
            'label' => 'بعد از این تخفیف دیگر اعمال نمی شود',
        ],
        'coupon' => [
            'label' => 'کوپن',
            'helper_text' => 'کوپن مورد نیاز برای اعمال تخفیف را وارد کنید، اگر خالی بماند به طور خودکار اعمال می شود.',
        ],
        'max_uses' => [
            'label' => 'حداکثر استفاده',
            'helper_text' => 'برای استفاده های نامحدود خالی بگذارید.',
        ],
        'max_uses_per_user' => [
            'label' => 'حداکثر استفاده برای هر کاربر',
            'helper_text' => 'Leave blank for unlimited uses.',
        ],
        'minimum_cart_amount' => [
            'label' => 'حداقل مقدار سبد خرید',
        ],
        'min_qty' => [
            'label' => 'مقدار محصول',
            'helper_text' => 'تعداد محصولات واجد شرایط برای اعمال تخفیف را تنظیم کنید.',
        ],
        'reward_qty' => [
            'label' => 'تعداد اقلام رایگان',
            'helper_text' => 'چند عدد از هر کالا تخفیف دارد.',
        ],
        'max_reward_qty' => [
            'label' => 'حداکثر مقدار پاداش',
            'helper_text' => 'حداکثر مقدار محصولات قابل تخفیف بدون در نظر گرفتن معیارها.',
        ],
        'automatic_rewards' => [
            'label' => 'به طور خودکار پاداش اضافه کنید',
            'helper_text' => 'برای افزودن محصولات پاداش وقتی در سبد موجود نیست، روشن کنید.',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'status' => [
            'label' => 'وضعیت',
            \Lunar\Models\Discount::ACTIVE => [
                'label' => 'فعال',
            ],
            \Lunar\Models\Discount::PENDING => [
                'label' => 'در انتظار',
            ],
            \Lunar\Models\Discount::EXPIRED => [
                'label' => 'منقضی شده است',
            ],
            \Lunar\Models\Discount::SCHEDULED => [
                'label' => 'زمان بندی شده',
            ],
        ],
        'type' => [
            'label' => 'نوع',
        ],
        'starts_at' => [
            'label' => 'تاریخ شروع',
        ],
        'ends_at' => [
            'label' => 'تاریخ پایان',
        ],
    ],
    'pages' => [
        'availability' => [
            'label' => 'در دسترس بودن',
        ],
        'limitations' => [
            'label' => 'محدودیت',
        ],
    ],
    'relationmanagers' => [
        'collections' => [
            'title' => 'دسته‌بندی‌ها',
            'description' => 'انتخاب کنید که این تخفیف به کدام مجموعه محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => 'اختصاص دادن دسته بندی',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثناء',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثناء',
                        ],
                    ],
                ],
            ],
        ],
        'brands' => [
            'title' => 'برندها',
            'description' => 'انتخاب کنید که این تخفیف به کدام برندها محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => 'اختصاص دادن برند',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثناء',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثناء',
                        ],
                    ],
                ],
            ],
        ],
        'products' => [
            'title' => 'محصولات',
            'description' => 'انتخاب کنید که این تخفیف به چه محصولاتی محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => 'افزودن محصول',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثناء',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثناء',
                        ],
                    ],
                ],
            ],
        ],
        'rewards' => [
            'title' => 'جوایز محصول',
            'description' => 'انتخاب کنید که کدام محصولات در صورت وجود در سبد خرید و رعایت شرایط فوق تخفیف خواهند داشت.',
            'actions' => [
                'attach' => [
                    'label' => 'افزودن محصول',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثناء',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثناء',
                        ],
                    ],
                ],
            ],
        ],
        'conditions' => [
            'title' => 'شرایط محصول',
            'description' => 'محصولات مورد نیاز برای اعمال تخفیف را انتخاب کنید.',
            'actions' => [
                'attach' => [
                    'label' => 'افزودن محصول',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثناء',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثناء',
                        ],
                    ],
                ],
            ],
        ],
        'productvariants' => [
            'title' => 'محصول متغیر',
            'description' => 'انتخاب کنید که این تخفیف به کدام محصول متغیر محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => 'افزودن محصول متغیر',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'sku' => [
                    'label' => 'SKU',
                ],
                'values' => [
                    'label' => 'گزینه(ها)',
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثناء',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
