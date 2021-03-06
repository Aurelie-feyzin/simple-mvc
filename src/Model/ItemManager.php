<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace Model;

/**
 *
 */
class ItemManager extends AbstractManager
{
    const TABLE = 'item';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


    public function insert(array $data): int
    {

        extract($data);

        // prepared request
        $statement = $this->pdoConnection->prepare("INSERT INTO $this->table (`title`) VALUES (:title)");
        $statement->bindValue('title', $title, \PDO::PARAM_STR);


        if ($statement->execute()) {
            return $this->pdoConnection->lastInsertId();
        }
    }


    public function delete(int $id): void
    {
        // prepared request
        $statement = $this->pdoConnection->prepare("DELETE FROM $this->table WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }


    public function update(int $id, string $title):int
    {

        // prepared request
        $statement = $this->pdoConnection->prepare("UPDATE $this->table SET `title` = :title WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->bindValue('title', $title, \PDO::PARAM_STR);


        return $statement->execute();
    }
}
