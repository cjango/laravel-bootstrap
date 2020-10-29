<?php

namespace App\Models\Traits;

use App\Scopes\OrderByIdDescScope;

trait OrderByIdDesc
{

    /**
     * Notes: 初始化trait，自动在模型中，注入作用域
     * @Author: <C.Jason>
     * @Date: 2020/1/19 1:42 下午
     */
    public static function bootOrderByIdDesc(): void
    {
        static::addGlobalScope(new OrderByIdDescScope);
    }

}
