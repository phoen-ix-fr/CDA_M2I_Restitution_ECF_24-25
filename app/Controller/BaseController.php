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

    protected function generateCsrfToken(): string
    {
        $strToken = bin2hex(random_bytes(32));

        $_SESSION['csrf_token'] = $strToken;

        $_SESSION['csrf_token_expiration'] = time() + (10 * 60);

        return $strToken;
    }

    protected function validateCsrfToken(string $tokenValue): bool
    {
        if(isset($_SESSION['csrf_token']) 
            && $_SESSION['csrf_token'] === $tokenValue
            && isset($_SESSION['csrf_token_expiration']) 
            && $_SESSION['csrf_token_expiration'] > time())
        { 
            return true;
        }

        return false;
    }
}
