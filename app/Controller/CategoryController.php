<?php

namespace M2i\Ecf\Controller;

use Smarty\Smarty;
use M2i\Ecf\Model\CategoryModel;

class CategoryController extends BaseController
{
    private CategoryModel $_categoryModel;

    public function __construct()
    {
        parent::__construct();

        $this->_categoryModel = new CategoryModel();
    }
    
    public function index()
    {      
        $objCategoryModel = new CategoryModel();
        $arrCategories = $objCategoryModel->findAll();

        // Transmission d'une variable vers la vue
        $this->_smarty->assign('categories', $arrCategories);

        $this->_smarty->display('category/list.tpl');
    }

    public function create()
    {
        $arrErrors = [];

        if(count($_POST)) {

            // Valider le jeton CSRF
            if($this->validateCsrfToken($_POST['csrf_token'])) {

                $strName = filter_var(trim($_POST['name']??""), FILTER_SANITIZE_SPECIAL_CHARS);

                if(!$strName) {
                    
                    // Message d'erreur, la chaine est vide
                    $arrErrors['name'] = "Un nom de catégorie valide est nécessaire";
                }
                else {

                    if(strlen($strName) > 160) {

                        // Message d'erreur : taille max de 160
                        $arrErrors['name'] = "La taille ne doit pas dépasser 160 caractères";
                    }
                    else {
                        
                        if($this->_categoryModel->findByName($strName)) {

                            // Message d'erreur : une catégorie avec ce nom existe déjà
                            $arrErrors['name'] = "Une catégorie avec ce nom existe déjà";
                        }
                        else {

                            // Utilisation du CategoryModel pour créer la catégorie
                            $objCategory = $this->_categoryModel->insert([
                                'name'  => $strName
                            ]);

                            // Si tout est OK, on redirige vers la liste des catégories
                            if($objCategory) {

                                header('Location: /index.php?controller=category&action=index');
                                exit;
                            }
                            else {

                                $arrErrors['db'] = "Une erreur est survenue lors de la création en base. Veuillez réessayer";
                            }
                        }
                    }
                }
            }
            else {

                $arrErrors['csrf'] = "Veuillez actualiser la page avant d'envoyer le formulaire";
            }   
        }

        $this->_smarty->assign('action', 'create');

        $this->_smarty->assign('errors', $arrErrors); //< Transmet le tableau des erreurs à ma vue
        $this->_smarty->assign('data', $_POST);

        // Génération du token CSRF et envoi à la vue
        $this->_smarty->assign('csrf', $this->generateCsrfToken());

        $this->_smarty->display('category/create.tpl');
    }

    public function update()
    {
        $arrErrors = [];

        $intCategoryId = $_GET['id']??null;

        if($intCategoryId) {

            $objCategory = $this->_categoryModel->findById($intCategoryId);

            if($objCategory) {

                $arrErrors = [];

                if(count($_POST)) {

                    // Valider le jeton CSRF
                    if($this->validateCsrfToken($_POST['csrf_token'])) {

                        $strName = filter_var(trim($_POST['name']??""), FILTER_SANITIZE_SPECIAL_CHARS);

                        if(!$strName) {
                            
                            // Message d'erreur, la chaine est vide
                            $arrErrors['name'] = "Un nom de catégorie valide est nécessaire";
                        }
                        else {

                            if(strlen($strName) > 160) {

                                // Message d'erreur : taille max de 160
                                $arrErrors['name'] = "La taille ne doit pas dépasser 160 caractères";
                            }
                            else {
                                
                                if($strName !== $objCategory->getName() && 
                                    $this->_categoryModel->findByName($strName)) {

                                    // Message d'erreur : une catégorie avec ce nom existe déjà
                                    $arrErrors['name'] = "Une catégorie avec ce nom existe déjà";
                                }
                                else {

                                    // Utilisation du CategoryModel pour créer la catégorie
                                    $objCategory = $this->_categoryModel->update(
                                        $objCategory->getId(),
                                        [
                                            'name'  => $strName
                                        ]
                                    );

                                    // Si tout est OK, on redirige vers la liste des catégories
                                    if($objCategory) {

                                        header('Location: /index.php?controller=category&action=index');
                                        exit;
                                    }
                                    else {

                                        $arrErrors['db'] = "Une erreur est survenue lors de la création en base. Veuillez réessayer";
                                    }
                                }
                            }
                        }
                    }
                    else {

                        $arrErrors['csrf'] = "Veuillez actualiser la page avant d'envoyer le formulaire";
                    }   
                }

                
                $this->_smarty->assign('action', 'update&id=' . $objCategory->getId());

                // Génération du token CSRF et envoi à la vue
                $this->_smarty->assign('csrf', $this->generateCsrfToken());
                
                $this->_smarty->assign('errors', $arrErrors); //< Transmet le tableau des erreurs à ma vue
                $this->_smarty->assign('data', [
                    'name'  => $_POST['name']??$objCategory->getName()
                ]);

                $this->_smarty->display('category/create.tpl');
            }
            else {

                $this->redirectNotFound();
            }
        }
        else {

            $this->redirectNotFound();
        }
    }

}