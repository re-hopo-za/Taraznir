<?php


use Illuminate\Support\Facades\Redis;

function indexChecker($data , $index , $default ='' )
{
    if (!empty( $data ) ) {
        if ( is_object( $data ) && isset( $data->$index ) ){
            return $data->$index;
        }elseif ( is_array( $data ) && isset( $data[$index] ) ){
            return $data[$index];
        }
    }
    return $default;
}


function returnValueIsTrue( $data ,$index ,$value ,$default = '' )
{
    if ( !empty( indexChecker ( $data ,$index ) ) ) {
        return $value;
    }
    return $default;
}

function checkCurrentPage( $page ): string
{
    if ( $page == '/'.lcfirst(request()->route()->getName()) || $page == request()->route()->getName() ){
        return 'current-menu-item';
    }
    return '';
}

function breadcrumbsRender( $route ): string
{
    $breadcrumb = '';
    if ( !empty( $route ) && is_array( $route )){
        foreach ( $route as $name => $link ) {
            $breadcrumb .= '<span class="sep">|</span>';
            if ( !empty( $link ) ) {
                $breadcrumb .= '<a class="trail-begin" href="'.$link.'">'.getPageTranslatedTitle( $name ).'</a>';
            }else{
                $breadcrumb .= '<span class="trail-end">'.getPageTranslatedTitle( $name ).'</span>';
            }
        }
    }
    return $breadcrumb;
}


function getPageTranslatedTitle( $page ): string{
    switch ( strtolower( trim( $page ) ) ){
        case 'home':
            return 'خانه';
        case 'exhibition':
            return 'نمایشگاه';
        case 'search':
            return 'جستجو';
        case 'product':
            return 'محصولات';
        case 'project':
            return 'پروژ‌ها';
        case 'service':
            return 'خدمات';
        case 'blog':
            return 'مقاله‌ها';
        case 'resource':
            return 'منابع';
        case 'contact':
            return 'تماس با ما';
        case 'about':
            return 'درباره‌ما';
        case 'Category Resource':
           return 'دسته‌بندی منابع';
        default:
            return $page;
    }
}


function slugRectifier( $string )
{
    if ( !empty( $string ) ) {
        $string = trim( $string );
        $string = mb_strtolower( $string ,"UTF-8" );
        $string = preg_replace("/[^a-z0-9_\s\-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويپگچةى]#u/" ,"" ,$string );
        $string = preg_replace("/[\s-]+/", " " ,$string );
        $string = preg_replace("/[\s_]/" ,'-', $string);
    }
    return $string;
}


function fileIcon( $filename  ){
    if ( !empty( $filename ) ){
        $ext = pathinfo( $filename, PATHINFO_EXTENSION );
        switch ( $ext ){
            case 'pdf':
                return '<i class="fa fa-file-pdf-o"></i>';
            case 'docx':
            case 'doc':
            case 'txt':
                return '<i class="fa fa-file-word-o"></i>';
            case 'xlsx':
            case 'xls':
                return '<i class="fa fa-file-excel-o"></i>';
            case 'pptx':
            case 'ppt':
                return '<i class="fa fa-file-powerpoint-o"></i>';
            case 'rar':
            case 'zip':
                return '<i class="fa fa-file-archive-o"></i>';
            case 'png':
            case 'gif':
            case 'jpg':
                return '<i class="fa fa-file-image-o"></i>';
            case 'mp3':
            case 'wma':
            case 'wav':
                return '<i class="fa fa-file-audio-o"></i>';
            case 'mp4':
                return '<i class="fa fa-file-video-o"></i>';
        }
    }
    return '';
}




function randomColor() :string
{
    return array_rand( array_flip(['16183F' ,'474554' ,'ACA9BB' ,'003B2A' ,'1F6B58' ,'4A2A00' ,'005E8E']) );
}


function sliderPosition( $position ) :string
{
    if ( !empty( $position ) ){
        return match ( $position ) {
            'right'  => "['right','right','right','center']",
            'center' => "['center','center','center','center']",
            'left'   => "['left','left','left','center']",
        };
    }
    return '';
}


function clearingHtml( $content ,$type ) :string
{
    if ( $type == 0 ){
        return html_entity_decode( strip_tags( $content ) );
    }
    return $content;
}


function redisHandler( string $key ,Closure|null $value ){
    $data = unserialize( Redis::get( $key) );
    if ( empty( $data ) ){
        Redis::set( $key ,serialize( $value() ) );
        return $value();
    }
    return $data;
}


function redisRemover( $key ){
    $keys = Redis::keys( $key);
    if ( !empty( $keys ) && is_array( $keys )){
        foreach ( $keys as $key ){
            Redis::del( str_replace(env('REDIS_PREFIX'),'',$key )  );
        }
    }
}


function socialsTagGenerator( $type ,$date  ) :string
{
    $tags =
    '
    <meta name="keywords" content="[keywords]">
    <meta name="description" content="[description]">
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="[target]">
    <meta property="og:title" content="[title]">
    <meta property="og:url" content="[url]">
    <meta property="og:image" content="[image]">
    <meta property="og:description" content="[description]">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="[url]">
    <meta property="twitter:title" content="[title]">
    <meta property="twitter:description" content="[description]">
    <meta property="twitter:image" content="[image]">
    <meta name="twitter:creator" content="@TalentGarnet" />
    <meta name="twitter:site" content="@TalentGarnet" />
    ';

    if( $type == 'page') {
        $tags = str_replace('[target]', 'website', $tags);
    }
    else {
        $tags = str_replace('[target]', 'article', $tags);
    }
    $main_desc = 'تاراز نیر آداک جهت طراحی سیستم های صاعقه گیر و حفاظت در برابر صاعقه و سیستم های ارتینگ صنعتی و ساختمانی  اقدام می‌نماید طبق آخرین استاندارد های روز دنیا از جمله NFPA و IEEE و IEC و همچنین اقدام به تولیدکالاهای مورد نیاز در صنعت ارتینگ با استاندارد های مربوطه مینماید،تیم طراحی و فنی مهندسی این مجموعه از متخصصان صنعت برق می‌باشد که جهت طراحی های صنعتی و اجرای پروژه های برق صنعتی در یک تیم بصورت حرفه ای با به روز ترین نرم افزار ها و ابزار آلات اقدام می نمایند
این مجموعه در انجام کارهای پیمانی در صنعت برق از جمله کابل کشی سینی گذاری تاسیسات کامل برقی فعالیت گسترده ای دارد';
    $main_keywords = "تاراز نیرآداک، تارازنیر،ارت،صاعقه گیر،ارتینگ،اتصال زمین،الکترود،چاه،چاه ارت،ارستر،برقگیر،مواد کاهنده،مقاومت ویژه،ارت تستر،اسپارک گپ،میله ارت،کلمپ ارت،کلمپ،کلمپ برنجی،سیم به صفحه،سیم به میله،سر ضربه خور،نوک فولادی،باسبار،دریچه بازدید،موج،شوک،tncs,tns,tnc,tt,it ، رعدوبرق،صاعقه گیر اکتیو،صاعقه گیر پسیو،فرانکلین،لوله،کاندوئیت،سینی کابل،نفت،گار،پتانسیل،پتانسیل گام،پتانسیل تماس،مقاومت اهمی،ونر،اشلومبرگر،سه نقطه ای،افت پتانسیل،شیب،62 درصد ،نردبان کابل ،ارت یوفر،کلمپ گالوانیزه ،کلمپ همبندی ،قیمت میله فرانکلین،قیمت صاعقه گیرپسیو،قیمت صاعقه گیرالکترونیک خازنی، اتصال زمین کلیدهای هوایی شبکه فشار متوسط، روش اجرای زمین الکتریکی، حلقه هم پتانسیل کننده، اتصال زمین پستهای توزیع هوایی،قیمت بکفیل،قیمت کنتاکتور،EKF،قیمت محصولات EKF";

    $cover = 'https://taraznir.com/images/taraznir-logo-2x.png';
    $tags  = str_replace( '[image]'       ,$cover       ,$tags );
    $tags  = str_replace( '[title]'       ,$date->title ,$tags );
    $tags  = str_replace( '[url]'         ,$date->url   ,$tags );
    $tags  = str_replace( '[keywords]'    ,$date->keywords    ??  $main_keywords ,$tags );
    return   str_replace( '[description]' ,$date->description ?? $main_desc      ,$tags );
}



