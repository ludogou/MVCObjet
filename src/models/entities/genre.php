<?php

namespace MVCObjet\models\entities;

class Genre
{
    private $id;
    private $name;

    //@return int

    public function getId(): int
    {
        return $this->id;
    }
    /*
@param int $id
@return Genre*/

    public function setId(int $Id): Genre
    {
        $this->id = $Id;
        return $this;
    }

    /*
@return string
*/
    public function getName(): string
    {
        return $this->name;
    }

    /*
@param  string name
@return Genre
*/
    public function setName(string $Name): Genre
    {
        $this->name = $Name;
        return $this;
    }
}
