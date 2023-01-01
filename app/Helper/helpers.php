<?php


use App\Models\Option;
use Illuminate\Support\Facades\Redis;
use Laravel\SerializableClosure\SerializableClosure;

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




function translate($text=0)
{


    $arb_en_map=array (
        '\\xd8\\xa1' => '\'', '\\xd8\\xa2' => '|', '\\xd8\\xa3' => '>',
        '\\xd8\\xa4' => '&', '\\xd8\\xa5' => '<', '\\xd8\\xa6' => '}',
        '\\xd8\\xa7' => 'A', '\\xd8\\xa8' => 'b', '\\xd8\\xa9' => 'p',
        '\\xd8\\xaa' => 't', '\\xd8\\xab' => 'v', '\\xd8\\xac' => 'j',
        '\\xd8\\xad' => 'H', '\\xd8\\xae' => 'x', '\\xd8\\xaf' => 'd',
        '\\xd8\\xb0' => '*', '\\xd8\\xb1' => 'r', '\\xd8\\xb2' => 'z',
        '\\xd8\\xb3' => 's', '\\xd8\\xb4' => '$', '\\xd8\\xb5' => 'S',
        '\\xd8\\xb6' => 'D', '\\xd8\\xb7' => 'T', '\\xd8\\xb8' => 'Z',
        '\\xd8\\xb9' => 'E', '\\xd8\\xba' => 'g', '\\xd9\\x80' => '_',
        '\\xd9\\x81' => 'f', '\\xd9\\x82' => 'q', '\\xd9\\x83' => 'k',
        '\\xd9\\x84' => 'l', '\\xd9\\x85' => 'm', '\\xd9\\x86' => 'n',
        '\\xd9\\x87' => 'h', '\\xd9\\x88' => 'w', '\\xd9\\x89' => 'Y',
        '\\xd9\\x8a' => 'y', '\\xd9\\x8b' => 'F', '\\xd9\\x8c' => 'N',
        '\\xd9\\x8d' => 'K', '\\xd9\\x8e' => 'a', '\\xd9\\x8f' => 'u',
        '\\xd9\\x90' => 'i', '\\xd9\\x91' => '~', '\\xd9\\x92' => 'o',
        '\\xd9\\xb0' => '`', '\\xd9\\xb1' => '{', '\\xd8\\xbb' => 'g' ,
        '\\xd9\\x83' => 'k'
    );

    foreach($arb_en_map as $key=>$value)
    {
        $text=preg_replace("/$key/",$value,$text);
    }
    return  htmlentities($text);

}
