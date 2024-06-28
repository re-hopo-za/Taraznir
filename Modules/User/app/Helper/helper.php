<?php

use Illuminate\Support\Facades\Auth;
use Modules\User\app\Models\User;

function user_trans($keyword): string
{
    return __("user::user.$keyword");
}

function auth_trans($keyword): string
{
    return __("user::auth.$keyword");
}


function ta_user(): ?object
{
    return auth()->user();
}


function ta_user_id(): int
{
    return auth()->user()->id;
}


function ta_is_admin(): bool
{
    $user = Auth::user();
    return redis_handler('user:is_admin_'.$user->id ,function () use ($user){
        return (bool)$user?->is_admin;
    });
}


function ta_super_admin(): ?object
{
    return redis_handler('user:super_admin' ,function (){
        return User::where('is_admin' ,1)->first();
    });
}


function ta_user_can($permission): bool
{
    if(!ta_is_admin())
        return (bool) auth()->user()->hasPermissionTo($permission);

    return true;
}


function ta_user_can_any($permissions): bool
{
    if(!ta_is_admin())
        return (bool) auth()->user()->hasAnyPermission($permissions);

    return true;
}

function ta_avatar($user): ?string
{
    if(is_numeric($user))
        $user = User::find($user);

    if(!$user)
        return null;

    return $user->getMedia('avatar')?->first()?->getFullUrl();
}
