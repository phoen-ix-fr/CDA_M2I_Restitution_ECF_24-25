<?php

namespace M2i\Ecf\Model;

use M2i\Ecf\Entity\Product;

class ProductModel extends BaseModel
{
    public function findAll(): array
    {
        $sqlQuery = "SELECT * FROM products";

        // Récupération des données sous la forme d'un tableau associatif (clé/valeur)
        $arrProducts = $this->_pdo->query($sqlQuery)->fetchAll();

        // Tableau des objets Product qui sera renvoyé
        $arrObjProducts = [];

        foreach($arrProducts as $arrProduct) {
            $objProduct = new Product();
            $objProduct->hydrate($arrProduct);

            $arrObjProducts[] = $objProduct;
        }

        return $arrObjProducts;
    }
}