<?php

namespace M2i\Ecf\Model;

use M2i\Ecf\Entity\User;

class UserModel extends BaseModel
{
    public function findByLogin(string $login): ?User
    {
        $sqlQuery = "SELECT * FROM users WHERE login = :login";

        $objStatement = $this->_pdo->prepare($sqlQuery);

        $objStatement->bindValue('login', $login);

        $objStatement->execute();

        $arrRawData = $objStatement->fetch();

        if($arrRawData) {

            $objUser = new User();
            $objUser->hydrate($arrRawData);

            return $objUser;
        }

        return null;
    }
}