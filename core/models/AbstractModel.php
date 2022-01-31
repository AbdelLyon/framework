<?php

namespace Models;

class AbstractModel
{
   protected \PDO $pdo;
   protected string $table;

   private \PDOStatement $statementFindAll;
   private \PDOStatement $statementFindById;
   private \PDOStatement $statementRemove;

   public function __construct()
   {
      $this->pdo = \Database\Database::getPdo();
      $this->statementFindAll = $this->pdo->query("SELECT * FROM $this->table");
      $this->statementFindById = $this->pdo->prepare("SELECT * FROM $this->table WHERE id = :id");
      $this->statementRemove = $this->pdo->prepare("DELETE FROM $this->table WHERE id = :id");
   }

   /**
    * retourne un tableau contenant tous les elements
    * @return array|bool
    */

   public function findAll(): array | bool
   {
      return $this->statementFindAll->fetchAll(\PDO::FETCH_CLASS, get_class($this));
   }

   /**
    * trouver un element par son id
    * @param integer $cocktail_id
    * @return object|bool
    */

   public function findById(int $id): object | bool
   {
      $this->statementFindById->execute(["id" => $id]);
      $this->statementFindById->setFetchMode(\PDO::FETCH_CLASS, get_class($this));
      return $this->statementFindById->fetch();
   }

   /**
    * suprime un element par son id
    * @param integer $id
    * @return void
    */

   public function remove(object $instance): void
   {
      $this->statementRemove->execute(["id" => $instance->getId()]);
   }
}
