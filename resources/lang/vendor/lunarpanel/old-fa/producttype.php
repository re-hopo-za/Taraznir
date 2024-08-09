<?php

return [

    'label' => 'نوع محصول',

    'plural_label' => 'انواع محصول',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'products_count' => [
            'label' => 'تعداد محصول',
        ],
        'product_attributes_count' => [
            'label' => 'ویژگی های محصول',
        ],
        'variant_attributes_count' => [
            'label' => 'ویژگی های متفاوت',
        ],
    ],

    'tabs' => [
        'product_attributes' => [
            'label' => 'ویژگی های محصول',
        ],
        'variant_attributes' => [
            'label' => 'ویژگی های متغیر',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
    ],

    'attributes' => [
        'no_groups' => 'هیچ گروه ویژگی در دسترس نیست.',
        'no_attributes' => 'هیچ ویژگی در دسترس نیست.',
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'This product type can not be deleted as there are products associated.',
            ],
        ],
    ],

];
