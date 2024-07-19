<?php

namespace Modules\User\app\Models;

use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lunar\Base\Traits\LunarUser;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements HasMedia , MustVerifyEmail
{
    use HasFactory ,Notifiable ,HasRoles ,HasPanelShield ,InteractsWithMedia ,LunarUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function canAccessFilament(): bool
    {
        return $this->hasAnyRole( Role::all()) || $this->meta()->where('key' ,'is_admin' )->count();
    }

    public function isAdmin(): bool
    {
        return true;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->profile_photo_path;
    }


    public function getAvatarAttribute()
    {
        return $this->media->first()?->getFullUrl() ?? '/images/avatar.png';
    }


    public function meta(): MorphMany
    {
        return $this->morphMany('Modules\Core\app\Models\Meta', 'metaable');
    }
}
