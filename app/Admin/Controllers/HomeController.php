<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Content;

class HomeController extends Controller
{

    public function index(Content $content)
    {
        return $content
            ->title('看板')
            ->description('Description...');
    }

}
