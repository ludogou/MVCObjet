<?php
namespace MVCObjet\models\entities;

class actor
{
    private $id;
    private $firstName;
    private $lastName;
   
   

public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $Id): actor
    {
        $this->id = $Id;
        return $this;
    }

    public function getFirstName():String
    {
        return $this->firstName;
    }

    public function setFirstName(string $first_name): actor
    {
        $this->firstName = $first_name;
        return $this;
    }

    
    public function getLastName():String
    {
        return $this->lastName;
    }

    public function setLastName(string $last_name): actor
    {
        $this->lastName = $last_name;
        return $this;
    }
  
}