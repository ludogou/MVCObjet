<?php

namespace MVCObjet\models\entities;

use DateTime;

class movie
{
    private $id;
    private $title;
    private $description;
    private $duration;
    private $date;
    private $cover_image;
 

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $Id): movie
    {
        $this->id = $Id;
        return $this;
    }

    public function getTitle(): String
    {
        return $this->title;
    }

    public function setTitle(string $title): movie
    {
        $this->title = $title;
        return $this;
    }


    public function getDescription(): String
    {
        return $this->description;
    }

    public function setDescription(string $description): movie
    {
        $this->description = $description;
        return $this;
    }

    public function getDuration(): String
    {
        return $this->duration;
    }

    public function setDuration(string $duration): movie
    {
        $this->duration = $duration;
        return $this;
    }


    public function getDate():string
    {
        return $this->date;
    }

    public function setDate(string $date): movie
    {
        $this->date = $date;
        return $this;
    }
    public function getCoverImage(): String
    {
        return $this->cover_image;
    }

    public function setCoverImage(string $cover_image): movie
    {
        $this->cover_image = $cover_image;
        return $this;
    }
    public function getGenre():genre
    {
      return  $this->genre; 
    }
    public function setGenre(Genre $genre):movie{
        $this->genre=$genre;
        return $this;
    }
    public function getDirector():director {
        return $this->director;
    }
    public function setDirector(director $director): movie {
        $this->director = $director;
        return $this;
    }
}
