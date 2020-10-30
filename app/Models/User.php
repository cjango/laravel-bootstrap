<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Jason\Api\Traits\ApiGuardable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{

    use Notifiable,
        ApiGuardable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            $model->info()->create();
        });
    }

    /**
     * Notes: 用户资料
     * @Author: <C.Jason>
     * @Date  : 2020/10/29 4:30 下午
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function info()
    {
        return $this->hasOne(UserInfo::class);
    }

    /**
     * Notes: 设置密码
     * @Author: <C.Jason>
     * @Date  : 2020/10/30 2:49 下午
     * @param $value
     */
    protected function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

}
