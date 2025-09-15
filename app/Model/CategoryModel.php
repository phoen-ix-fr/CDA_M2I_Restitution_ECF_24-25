<?php

namespace M2i\Ecf\Model;

use M2i\Ecf\Entity\Category;
use M2i\Ecf\Service\DatabaseService;

class CategoryModel
{
    private $_pdo;

    public function __construct()
    {        
        $this->_pdo = DatabaseService::getInstance();
    }


    public function findAll(): array
    {
        $sqlQuery = "SELECT * FROM categories";

        // Récupération des données sous la forme d'un tableau associatif (clé/valeur)
        $arrCategories = $this->_pdo->query($sqlQuery)->fetchAll();

        // Tableau des objets Categorie qui sera renvoyé
        $arrObjCategories = [];

        foreach($arrCategories as $arrCategory) {
            $objCategory = new Category();
            $objCategory->hydrate($arrCategory);

            $arrObjCategories[] = $objCategory;
        }

        return $arrObjCategories;
    }
}