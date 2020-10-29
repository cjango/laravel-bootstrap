<?php

namespace App\Models\Traits;

use App\Models\User;

trait BelongsToUser
{

    /**
     * Notes: 隶属用户
     * @Author: <C.Jason>
     * @Date  : 2020/10/29 4:29 下午
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
