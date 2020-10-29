<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;

class Model extends \Illuminate\Database\Eloquent\Model
{

    use DefaultDatetimeFormat;

    protected $guarded = [];

}
