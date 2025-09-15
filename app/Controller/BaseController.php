<?php

namespace M2i\Ecf\Controller;

use Smarty\Smarty;

abstract class BaseController
{
    protected Smarty $_smarty;

    public function __construct()
    {
        $this->_smarty = new Smarty();

        // Configuration de Smarty
        $this->_smarty->setTemplateDir(APP_ROOT . '/views');

        $this->_smarty->setCacheDir(APP_ROOT . '/cache');
        $this->_smarty->setCompileDir(APP_ROOT . '/views_c');
    }
}
