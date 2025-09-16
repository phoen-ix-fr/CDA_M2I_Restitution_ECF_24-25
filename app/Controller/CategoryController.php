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
        if($_POST) {

            $strName = trim($_POST['name']??"");

            // Utilisation du CategoryModel pour créer la catégorie

            // Si tout est OK, on redirige vers la liste des catégories
        }

        $this->_smarty->display('category/create.tpl');
    }
}