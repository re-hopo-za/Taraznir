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
    $keys = Redis::keys($key.':*');
    if ( !empty( $keys ) && is_array( $keys )){
        foreach ( $keys as $key ){
            Redis::del( str_replace(env('REDIS_PREFIX'),'',$key )  );
        }
    }


}



