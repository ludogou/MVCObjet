<?php
namespace MVCObjet\models\entities;

class director
{
    private $id;
    private $first_name;
    private $last_name;

public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $Id): director
    {
        $this->id = $Id;
        return $this;
    }

    public function getFirstName():String
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): director
    {
        $this->first_name = $first_name;
        return $this;
    }

    
    public function getLastName():String
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): director
    {
        $this->last_name = $last_name;
        return $this;
    }


}