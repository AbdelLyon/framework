<?php

namespace Models;

class Cocktail extends AbstractModel
{
   protected string $table = "nom de table";
   private int $id;
   private string $name;

   public function getId(): ?int
   {
      return $this->id;
   }

   public function getName(): ?string
   {
      return $this->name;
   }

   public function setName(string $name): void
   {
      $this->name = $name;
   }

}
