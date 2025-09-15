<?php

namespace M2i\Ecf\Service;

use PDO;
use PDOException;

class DatabaseService
{
    private static ?PDO $_objInstance = null;

    public static function getInstance(): PDO
    {
        if(self::$_objInstance === null) {

            $strConnectionString = "mysql:host=" . $_ENV['DB_HOSTNAME'] .
                ";port=" . $_ENV['DB_PORT'] . 
                ";dbname=". $_ENV['DB_NAME'] . 
                ";charset=" . $_ENV['DB_CHARSET'];

            try {

                // Instancie l'instance
                self::$_objInstance = new PDO($strConnectionString, 
                    $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], [
                    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION
                ]);

            } catch(PDOException $exc) {

                echo $exc->getMessage(); die;
            }
        }

        // On renvoie l'instance PDO
        return self::$_objInstance;
    }
}