<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class OrderByIdDescScope implements Scope
{

    /**
     * 把约束加到 Eloquent 查询构造中。
     * @param Builder $builder
     * @param Model   $model
     * @return void
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->orderBy('id', 'desc');
    }

}
