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

    public function setFirstName($First): director
    {
        $this->first_name = $First;
        return $this;
    }

    
    public function getLastName():String
    {
        return $this->last_name;
    }

    public function setLastName($Last): director
    {
        $this->last_name = $Last;
        return $this;
    }


}