<?php

return [

    'label' => 'سفارش',

    'plural_label' => 'سفارش‌ها',

    'breadcrumb' => [
        'manage' => 'مدیریت کنید',
    ],

    'transactions' => [
        'capture' => 'دریافت ده',
        'intent' => 'در حال دریافت',
        'refund' => 'پس داده شده',
        'failed' => 'شکست خورد',
    ],

    'table' => [
        'status' => [
            'label' => 'وضعیت',
        ],
        'reference' => [
            'label' => 'مرجع',
        ],
        'customer_reference' => [
            'label' => 'مرجع مشتری',
        ],
        'customer' => [
            'label' => 'مشتری',
        ],
        'tags' => [
            'label' => 'برچسب',
        ],
        'postcode' => [
            'label' => 'کد پستی',
        ],
        'email' => [
            'label' => 'ایمیل',
            'copy_message' => 'آدرس ایمیل کپی شد',
        ],
        'phone' => [
            'label' => 'تلفن',
        ],
        'total' => [
            'label' => 'مجموع',
        ],
        'date' => [
            'label' => 'تاریخ',
        ],
        'new_customer' => [
            'label' => 'نوع مشتری',
        ],
        'placed_after' => [
            'label' => 'قرار داده شده پس از',
        ],
        'placed_before' => [
            'label' => 'قرار داده شده قبل از',
        ],
    ],

    'form' => [
        'address' => [
            'first_name' => [
                'label' => 'نام',
            ],
            'last_name' => [
                'label' => 'نام خانوادگی',
            ],
            'line_one' => [
                'label' => 'آدرس مسیر 1',
            ],
            'line_two' => [
                'label' => 'آدرس مسیر 2',
            ],
            'line_three' => [
                'label' => 'آدرس مسیر 3',
            ],
            'company_name' => [
                'label' => 'نام شرکت',
            ],
            'contact_phone' => [
                'label' => 'تلفن',
            ],
            'contact_email' => [
                'label' => 'آدرس ایمیل',
            ],
            'city' => [
                'label' => 'شهر',
            ],
            'state' => [
                'label' => 'ایالت / استان',
            ],
            'postcode' => [
                'label' => 'کد پستی',
            ],
            'country_id' => [
                'label' => 'کشور',
            ],
        ],

        'reference' => [
            'label' => 'مرجع',
        ],
        'status' => [
            'label' => 'وضعیت',
        ],
        'transaction' => [
            'label' => 'تراکنش',
        ],
        'amount' => [
            'label' => 'مقدار',

            'hint' => [
                'less_than_total' => "شما در حال گرفتن مبلغی کمتر از کل ارزش تراکنش هستید",
            ],
        ],

        'notes' => [
            'label' => 'یادداشت‌ها',
        ],
        'confirm' => [
            'label' => 'تایید کنید',

            'alert' => 'تایید لازم است',

            'hint' => [
                'capture' => 'لطفاً تأیید کنید که می‌خواهید این پرداخت را دریافت کنید',
                'refund' => 'لطفاً تأیید کنید که می خواهید این مبلغ را بازپرداخت کنید.',
            ],
        ],
    ],

    'infolist' => [
        'notes' => [
            'label' => 'یادداشت‌ها',
            'placeholder' => 'هیچ یادداشتی در مورد این سفارش وجود ندارد',
        ],
        'delivery_instructions' => [
            'label' => 'دستورالعمل تحویل',
        ],
        'shipping_total' => [
            'label' => 'مجموع حمل و نقل',
        ],
        'paid' => [
            'label' => 'پرداخت شده',
        ],
        'refund' => [
            'label' => 'بازپرداخت شده',
        ],
        'unit_price' => [
            'label' => 'قیمت واحد',
        ],
        'quantity' => [
            'label' => 'تعداد',
        ],
        'sub_total' => [
            'label' => 'جمع جزء',
        ],
        'discount_total' => [
            'label' => 'مجموع تخفیف',
        ],
        'total' => [
            'label' => 'مجموع',
        ],
        'current_stock_level' => [
            'message' => 'موجودی فعلی Level: :count',
        ],
        'purchase_stock_level' => [
            'message' => 'در زمان  ordering: :count',
        ],
        'status' => [
            'label' => 'وضعیت',
        ],
        'reference' => [
            'label' => 'مرجع',
        ],
        'customer_reference' => [
            'label' => 'مرجع مشتری',
        ],
        'channel' => [
            'label' => 'کانال',
        ],
        'date_created' => [
            'label' => 'تاریخ ایجاد',
        ],
        'date_placed' => [
            'label' => 'تاریخ قرار داده شده',
        ],
        'new_returning' => [
            'label' => 'جدید / مرجوع',
        ],
        'new_customer' => [
            'label' => 'مشتری جدید',
        ],
        'returning_customer' => [
            'label' => 'مرجوعی مشتری',
        ],
        'shipping_address' => [
            'label' => 'آدرس حمل و نقل',
        ],
        'billing_address' => [
            'label' => 'آدرس صورتحساب',
        ],
        'address_not_set' => [
            'label' => 'هیچ آدرسی تنظیم نشده است',
        ],
        'billing_matches_shipping' => [
            'label' => 'همان آدرس حمل و نقل',
        ],
        'additional_info' => [
            'label' => 'اطلاعات تکمیلی',
        ],
        'no_additional_info' => [
            'label' => 'بدون اطلاعات اضافی',
        ],
        'tags' => [
            'label' => 'برچسب‌ها',
        ],
        'timeline' => [
            'label' => 'جدول زمانی',
        ],
        'transactions' => [
            'label' => 'تراکنش‌ها',
            'placeholder' => 'بدون تراکنش',
        ],
        'alert' => [
            'requires_capture' => 'این سفارش همچنان برای ثبت نیاز به پرداخت دارد.',
            'partially_refunded' => 'این سفارش تا حدی بازپرداخت شده است.',
            'refunded' => 'این سفارش بازپرداخت شده است.',
        ],
    ],

    'action' => [
        'bulk_update_status' => [
            'label' => 'به روز رسانی وضعیت',
            'notification' => 'وضعیت سفارشات به روز شد',
        ],
        'update_status' => [
            'new_status' => [
                'label' => 'وضعیت جدید',
            ],
            'additional_content' => [
                'label' => 'محتوای اضافی',
            ],
            'additional_email_recipient' => [
                'label' => 'گیرنده ایمیل اضافی',
                'placeholder' => 'اختیاری',
            ],
        ],
        'download_order_pdf' => [
            'label' => 'دانلود PDF',
            'notification' => 'سفارش  به صورت PDF در حال دانلود میباشد',
        ],
        'edit_address' => [
            'label' => 'ویرایش ',

            'notification' => [
                'error' => 'خطا',

                'billing_address' => [
                    'saved' => 'آدرس صورت‌حساب ذخیره شد',
                ],

                'shipping_address' => [
                    'saved' => 'آدرس حمل و نقل ذخیره شد',
                ],
            ],
        ],
        'edit_tags' => [
            'label' => 'ویرایش',
        ],
        'capture_payment' => [
            'label' => 'پرداخت را دریافت کنید',

            'notification' => [
                'error' => 'مشکلی در دریافت وجود دارد',
                'success' => 'دریافت با موفقیت انجام شد',
            ],
        ],
        'refund_payment' => [
            'label' => 'مرجوع',

            'notification' => [
                'error' => 'مشکلی در بازپرداخت وجود داشت',
                'success' => 'بازپرداخت با موفقیت انجام شد',
            ],
        ],
    ],

];
