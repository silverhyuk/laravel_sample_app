<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return 'welcome controller invoke()';
    }

    public function test() {
        return 'welcome controller test()';
    }
}
