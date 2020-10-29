<?php

namespace App\Models;

use App\Models\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

    use BelongsToUser;
}
