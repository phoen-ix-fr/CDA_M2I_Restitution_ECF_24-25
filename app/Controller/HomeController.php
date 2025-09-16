<?php

namespace M2i\Ecf\Controller;

class HomeController extends BaseController
{
    public function index()
    {
        $this->redirectTo('auth', 'login');
    }
}