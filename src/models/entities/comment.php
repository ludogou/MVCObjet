<?php
namespace MVCObjet\models\entities;

class comment
{
    private $id;
    private $author;
    private $mark;
    private $content;
    private $movie_id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $Id): comment
    {
        $this->id = $Id;
        return $this;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(int $Author): comment
    {
        $this->author = $Author;
        return $this;
    }
    public function getMark(): string
    {
        return $this->mark;
    }

    public function setMark(int $Mark): comment
    {
        $this->mark = $Mark;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(int $Content): comment
    {
        $this->content = $Content;
        return $this;
    }
    public function getMovieId(): int
    {
        return $this->movie_id;
    }

    public function setMovieId(int $MovieId): comment
    {
        $this->movie_id = $MovieId;
        return $this;
    }
}
