<?php

namespace App\User\Controllers;

use Support\Controllers\Controller;

class CreateController extends Controller
{
    public function __construct()
    {
    }

    public function __invoke()
    {
        dd('create user here');
    }
}
