<?php

namespace M2i\Ecf\Controller;

use M2i\Ecf\Model\UserModel;

class AuthController extends BaseController
{
    public function login()
    {        
        // var_dump(password_hash('azerty', PASSWORD_DEFAULT)); die;

        if(count($_POST)) {

            // Valider le jeton CSRF
            if($this->validateCsrfToken($_POST['csrf_token'])) {

                $strLogin       = $this->trimValidateSanitizeInput($_POST['login']);
                $strPassword    = $this->trimValidateSanitizeInput($_POST['password']);

                if($strLogin && $strPassword) {

                    $objUserModel = new UserModel();
                    $objUser = $objUserModel->findByLogin($strLogin);

                    if($objUser) {

                        if(password_verify($strPassword, $objUser->getPasswordHash())) {

                            $objUser->setBlankPassword();
                            $_SESSION['user'] = $objUser;

                            $this->redirectTo('category', 'index');
                        }
                        else {
                            
                            $this->_arrErrors['credentials'] = "Idenifiant et/ou mot de passe incorrects";
                        }
                    }
                    else {
                        
                        $this->_arrErrors['credentials'] = "Idenifiant et/ou mot de passe incorrects";
                    }
                }
                else {

                    $this->_arrErrors['credentials'] = "Idenifiant et/ou mot de passe invalides";
                }
            }
            else {
                
                $this->_arrErrors['csrf'] = "CSRF Invalide";
            }
        }

        $this->_smarty->assign('data', $_POST);

        // Génération du token CSRF et envoi à la vue
        $this->_smarty->assign('csrf', $this->generateCsrfToken());

        $this->displaySmarty('auth/login.tpl');
    }

    public function logout()
    {
        session_destroy(); // Destruction de la session courante

        $this->redirectTo('home', 'index'); // Redirige vers la route par défaut
    }
}