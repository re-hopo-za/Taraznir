<?php


use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Modules\Core\app\Models\Option;

function clearing_html(string $content, int $type): string
{
    if (!$type)
        return html_entity_decode(strip_tags($content));

    return $content;
}


function index_checker($data, $index, $default = ''): mixed
{
    if (!empty($data)) {
        if (is_object($data) && isset($data->$index)) {
            return $data->$index;
        } elseif (is_array($data) && isset($data[$index])) {
            return $data[$index];
        }
    }
    return $default;
}


function slug_rectifier($string)
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


function mobile_Validator($mobile): bool
{
    if (preg_match("/^09[0-9]{9}$/", $mobile)) {
        return true;
    }
    return false;
}


function number_converter(string|int $number, $inverse = false): string|int
{
    if (empty($number)) return 0;

    $en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $fa = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];

    if ($inverse) {
        return str_replace($en, $fa, $number);
    }
    return str_replace($fa, $en, $number);
}


function jalali_to_gregorian_and_conversely(string|null $dateOrDateTime, string $separator = '-', string $format = 'Y-m-d'): string
{
    if (str_starts_with($dateOrDateTime, '0000')) return '';

    $dateOrDateTime = trim($dateOrDateTime);
    $dateOrDateTime = explode(' ', $dateOrDateTime);
    try {
        if (!empty($dateOrDateTime) && $dateOrDateTime[0] > 0) {
            $date = index_checker($dateOrDateTime, 0);
            $time = index_checker($dateOrDateTime, 1);
            $time = $time ?: verta()->formatTime();

            if (str_starts_with($date, '20')) {
                return Verta::instance($date . ' ' . $time)->format($format);
            }

            $date = explode($separator, $date);
            if (count($date) === 3 && strlen($date[0]) == 4 && strlen($date[1]) == 2 && strlen($date[2]) == 2) {
                $jalali = Verta::jalaliToGregorian((int)$date[0], (int)$date[1], (int)$date[2]);
                return trim(
                    date_create(implode('-', $jalali) . ' ' . $time)->format($format)
                );
            }
        }
    } catch (Exception $e) {
    }
    return false;
}


function jalali_date_validator(string $date, $separator = '\/'): bool|array
{
    return preg_grep('/^[0-9]{4}\/(0[1-9]|1[0-2])\/(0[1-9]|[1-2][0-9]|3[0-1])$/', explode("\n", $date));
}


/**
 * @throws Exception
 * @throws Exception
 */
function time_elapsed_string($datetime, $full = false): string
{
    $now      = new DateTime;
    $ago      = new DateTime($datetime);
    $diff     = $now->diff($ago);
    $diff->w  = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'سال',
        'm' => 'ماه',
        'w' => 'هفته',
        'd' => 'روز',
        'h' => 'ساعت',
        'i' => 'دقیقه'
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v;
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' گذشته' : 'همین الان';
}


function get_different_date($dateFrom, $dateTo, $convert): ?int
{
    try {
        if ($convert) {
            $dateFrom = jalali_to_gregorian_and_conversely($dateFrom);
            $dateTo   = jalali_to_gregorian_and_conversely($dateTo);
        }
        $dateFrom = Carbon::parse($dateFrom);
        $dateTo   = Carbon::parse($dateTo);
        if ($dateFrom > $dateTo || $dateFrom == $dateTo)
            return null;

        return $dateFrom->diffInDays($dateTo);
    } catch (\Exception $e) {
        return null;
    }
}


function redis_handler(string $key, Closure|null $value)
{
    if (env('APP_ENV') === 'local')
        return $value();

    if (empty($data = unserialize(Redis::get($key)))) {
        Redis::set($key, serialize($value()));
        return $value();
    }

    return $data;
}


function redis_remover($key): void
{
    if (!empty($keys = Redis::keys($key)) && is_array($keys))
        foreach ($keys as $key)
            Redis::del(str_replace("taraznir_", '', $key));
}


function common_redis_get_query($key, $model, $with, $limit)
{
    return redis_handler($key, function () use ($model, $with, $limit) {
        return
            $model::with($with)
                ->activeScope()
                ->orderBy('chosen', 'DESC')
                ->limit($limit)
                ->get();
    });
}


function common_redis_first_query($key, $model, $with, $where)
{
    return redis_handler($key, function () use ($model, $with, $where) {
        return
            $model::with($with)
                ->where(...$where)
                ->activeScope()
                ->first();
    });
}


function return_value_is_true($data, $index, $value, $default = '')
{
    if (!empty(index_checker($data, $index)))
        return $value;

    return $default;
}


function check_current_page($page): string
{
    if (str_contains(request()->route()->getName() ,$page))
        return 'current';

    return '';
}


function get_meta_value_by_key(Model|Collection|null $model, string $key, $default = '')
{
    if ($model && isset($model->meta) && $model->meta->count())
        return $model->meta->where('key', $key)->first()?->value;

    return $default;
}


function get_meta_values_by_key(?Model $model, string $key): array
{
    if ($model && method_exists($model ,'meta'))
        return $model->meta()->where('key' ,$key)->get()->pluck('value', 'id')->toArray();

    return [];
}


function get_meta_values_by_like_keys(?Model $model, string $key): array
{
    if ($model && method_exists($model, 'meta'))
        return $model->meta()->where('key', 'like', '%' . $key . '%')->get()->pluck('value', 'key')->toArray();

    return [];
}


function main_pages_seo()
{
    return redis_handler('theme:pages_seo', function () {
        return Option::where('key', 'main_pages_seo')->first();
    });
}


function seo_tags_generator($seo, $page, $title, $detailPage = null): string
{
    $d = $detailPage ? get_meta_value_by_key($seo, "description") : '';
    $k = $detailPage ? get_meta_value_by_key($seo, "keywords") : '';

    $tags = '
        <title>[title]</title>
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
        <meta name="twitter:creator" content="@taraznir" />
        <meta name="twitter:site" content="@taraznir" />
    ';

    if ($page)
        $tags = str_replace('[target]', 'website', $tags);
    else
        $tags = str_replace('[target]', 'article', $tags);

    if (!$d && $page && $seo && !$d = get_meta_value_by_key($seo, "{$page}_description"))
        $d = get_meta_value_by_key($seo, "default_description");

    if (!$k && $page && $seo && !$k = get_meta_value_by_key($seo, "{$page}_keywords"))
        $k = get_meta_value_by_key($seo, "default_keywords");

    $cover = route('/') . config('core.logo.1x');
    $tags = str_replace('[image]', $cover, $tags);
    $tags = str_replace('[title]', $title, $tags);
    $tags = str_replace('[url]', url()->current(), $tags);
    $tags = str_replace('[description]', $d, $tags);
    return str_replace('[keywords]', $k, $tags);
}


function file_extension_icon($filename): string
{
    if (!empty($filename)) {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        switch ($ext) {
            case 'pdf':
                return '<i class="icon fa fa-file-pdf-o"></i>';
            case 'docx':
            case 'doc':
            case 'txt':
                return '<i class="icon fa fa-file-word-o"></i>';
            case 'xlsx':
            case 'xls':
                return '<i class="icon fa fa-file-excel-o"></i>';
            case 'pptx':
            case 'ppt':
                return '<i class="icon fa fa-file-powerpoint-o"></i>';
            case 'rar':
            case 'zip':
                return '<i class="icon fa fa-file-archive-o"></i>';
            case 'png':
            case 'gif':
            case 'jpg':
                return '<i class="icon fa fa-file-image-o"></i>';
            case 'mp3':
            case 'wma':
            case 'wav':
                return '<i class="icon fa fa-file-audio-o"></i>';
            case 'mp4':
                return '<i class="icon fa fa-file-video-o"></i>';
        }
    }
    return '';
}


function models_name($model): ?string
{
    return[
        'Blog'  => 'مقاله',
        'Blogs' => 'مقاله‌های',
    ][$model] ?? null;
}


function get_media_option($option): ?string
{
    if($option){
        $media  = $option->getMedia('option')->first();
        if($media)
            return $media->getFullUrl();
    }
    return $option->value ?? '';
}

