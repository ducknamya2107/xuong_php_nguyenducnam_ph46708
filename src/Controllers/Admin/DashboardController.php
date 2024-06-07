<?php
namespace Nam\Xuongoop\Controllers\Admin;
use Nam\Xuongoop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}