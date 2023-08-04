<?php

namespace Modules\Misc\Helpers;

class MiscHelper
{

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


    public static function slugRectifier( $string )
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

    public static function mobileValidator( $mobile ): bool
    {
        if( preg_match("/^09[0-9]{9}$/" ,$mobile )) {
            return true;
        }
        return false;
    }

    public static function numberConverter( string|int $number ,$inverse = false ): string|int
    {
        if(empty( $number )) return 0;

        $en = ["0","1","2","3","4","5","6","7","8","9"];
        $fa = ["۰","۱","۲","۳","۴","۵","۶","۷","۸","۹"];

        if( is_numeric( $number ) && $inverse ){
            return str_replace( $en ,$fa ,$number );
        }
        return str_replace( $fa ,$en ,$number );
    }
}
