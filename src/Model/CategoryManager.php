<?php

namespace Model;

// connection BDD (définir les constantes dans un fichier app.php qui sera inclus)
require __DIR__ . '/../../app/db.php';

class CategoryManager
{
    public function selectAllCategories()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category";
        $categories = $pdo->query($query);

        return $categories->fetchAll();
    }

    public function selectOneCategory($id)
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = 'SELECT * FROM category WHERE id = :id';
        $statement = $pdo->prepare($query);
        $statement->bindValue(":id", $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

}