<?php


namespace App\Traits;

trait HelperTrait{


    public static function clearingHtml( $content ,$type ) :string
    {
        if ( $type == 0 ){
            return html_entity_decode( strip_tags( $content ) );
        }
        return $content;
    }


    public static function indexChecker($data ,$index ,$default = '') :mixed
    {
        if (!empty($data)) {
            if (is_object($data) && isset($data->$index)) {
                return $data->$index;
            }elseif (is_array($data) && isset($data[$index])) {
                return $data[$index];
            }
        }
        return $default;
    }



    public static function breadcrumbsRender( $route ): string
    {
        $breadcrumb = '';
        if (!empty( $route ) && is_array( $route ) ) {
            foreach ( $route as $name => $link ) {
                $breadcrumb .= '<span class="sep">|</span>';
                if (!empty($link)) {
                    $breadcrumb .= "<a class='trail-begin' href='{$link}'> {$name} </a>";
                } else {
                    $breadcrumb .= '<span class="trail-end">' . self::getPageTranslatedTitle( $name ) . '</span>';
                }
            }
        }
        return $breadcrumb;
    }



    public static function slugRectifier($string)
    {
        if (!empty($string)) {
            $string = trim($string);
            $string = mb_strtolower($string, "UTF-8");
            $string = preg_replace("/[^a-z0-9_\s\-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويپگچةى]#u/", "", $string);
            $string = preg_replace("/[\s-]+/", " ", $string);
            $string = preg_replace("/[\s_]/", '-', $string);
        }
        return $string;
    }




}
