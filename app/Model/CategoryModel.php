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

    public function findByName(string $name): ?Category
    {
        $sqlQuery = "SELECT * FROM categories WHERE name = :name";

        $objStatement = $this->_pdo->prepare($sqlQuery);

        $objStatement->bindValue('name', $name);

        $objStatement->execute();

        $arrRawData = $objStatement->fetch();

        if($arrRawData) {

            $objCategory = new Category();
            $objCategory->hydrate($arrRawData);

            return $objCategory;
        }

        return null;
    }












    public function insert(array $data): ?Category
    {
        $sqlQuery = "INSERT INTO categories (name) VALUES (:name);";

        $objStatement = $this->_pdo->prepare($sqlQuery);

        $objStatement->bindValue('name', $data['name']);

        $objStatement->execute();

        // On récupère la nouvelle catégorie créée ici :


        // On retourne NULL si la catégorie n'a été pas été créée/trouvée
        return null;
    }
}