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
        
    }
}