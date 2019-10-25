<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommandsController extends Controller
{
    function down() {
        return Artisan::call('down');
    }
}
