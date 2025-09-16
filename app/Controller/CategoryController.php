<?php

namespace M2i\Ecf\Controller;

use Smarty\Smarty;
use M2i\Ecf\Model\CategoryModel;

class CategoryController extends BaseController
{
    
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

            $strName = filter_var(trim($_POST['name']??""), FILTER_SANITIZE_SPECIAL_CHARS);

            $objCategoryModel = new CategoryModel();

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
                    
                    if($objCategoryModel->findByName($strName)) {

                        // Message d'erreur : une catégorie avec ce nom existe déjà
                        $arrErrors['name'] = "Une catégorie avec ce nom existe déjà";
                    }
                    else {

                        // Utilisation du CategoryModel pour créer la catégorie
                        $objCategory = $objCategoryModel->insert([
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

        $this->_smarty->display('category/create.tpl');
    }
}