<?php

namespace M2i\Ecf\Controller;

use Smarty\Smarty;

abstract class BaseController
{
    protected Smarty $_smarty;
    protected array $_arrErrors;

    public function __construct()
    {
        $this->_smarty = new Smarty();

        // Configuration de Smarty
        $this->_smarty->setTemplateDir(APP_ROOT . '/views');

        $this->_smarty->setCacheDir(APP_ROOT . '/cache');
        $this->_smarty->setCompileDir(APP_ROOT . '/views_c');

        $this->_arrErrors = [];
    }

    protected function displaySmarty(string $template)
    {
        if(array_key_exists('flashes', $_SESSION)) {

            // Récuépration des messages "FLASH" (en session)
            $this->_smarty->assign('flashes', $_SESSION['flashes']);

            unset($_SESSION['flashes']); //< Les messages flashes ont été consummés
        }

        $this->_smarty->assign('errors', $this->_arrErrors); //< Transmet le tableau des erreurs à ma vue

        $this->_smarty->display($template);
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

    protected function redirectNotFound()
    {        
        $this->redirectTo('error', 'httpNotFound');
    }

    protected function redirectTo(string $controller, string $action)
    {
        header("Location: /index.php?controller=$controller&action=$action");
        exit;
    }

    protected function trimValidateSanitizeInput(?string $input): ?string
    {
        return filter_var(trim($input??""), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
