<?php

namespace Nam\Xuongoop\Controllers\Client;


use Nam\Xuongoop\Commons\Controller;
use Nam\Xuongoop\Models\User;
use Nam\Xuongoop\Commons\Helper;

class HomeController extends Controller
{
    public function index()
    {
        // $user = new User();
        // Helper::debug($user);
        $name = "Nam Duc Nguyen";
        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
