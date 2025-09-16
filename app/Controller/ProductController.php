<?php

namespace M2i\Ecf\Controller;

use M2i\Ecf\Model\ProductModel;

class ProductController extends BaseController
{
    private ProductModel $_productModel;

    public function __construct()
    {
        parent::__construct();

        $this->_productModel = new ProductModel();
    }

    public function index()
    {
        $this->redirectIfNotLoggedIn();

        $arrCategories = $this->_productModel->findAll();

        // Transmission d'une variable vers la vue
        $this->_smarty->assign('products', $arrCategories);

        $this->displaySmarty('product/list.tpl');
    }
}