<?php

namespace M2i\Ecf\Controller;

use Smarty\Smarty;
use M2i\Ecf\Model\CategoryModel;

class CategoryController
{
    public function index()
    {
        $smarty = new Smarty();

        // Configuration de Smarty
        $smarty->setTemplateDir(APP_ROOT . '/views');

        $smarty->setCacheDir(APP_ROOT . '/cache');
        $smarty->setCompileDir(APP_ROOT . '/views_c');

        $objCategoryModel = new CategoryModel();
        $arrCategories = $objCategoryModel->findAll();

        // Transmission d'une variable vers la vue
        $smarty->assign('categories', $arrCategories);

        $smarty->display('category/list.tpl');
    }
}