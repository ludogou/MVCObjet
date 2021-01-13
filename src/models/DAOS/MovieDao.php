<?php
namespace MVCObjet\models\DAOS;

use MVCObjet\models\entities\movie;
use DateTime;

class MovieDao extends BaseDao{

public function findById($id) : movie {
        $stmt = $this ->db->prepare("SELECT * FROM movie WHERE id = :id");
        $res = $stmt->execute([':id'=>$id]);

        if ($res){
            return $stmt->fetchObject(Movie::class);
            //Movie::class équivalent à MVCObjet\Entities\movie
            //fetchObject lit une ligne à la fois et la retourne comme un objet
            //qui ici est créé sous entities.
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }

    }

    public function createObjectFromFields($fields): movie
    {
        //
        // liaison entre la donnée BDD et l'objet 
        // ici on voit le chainage ->setId->setName 
        //
        $movie = new movie();
        $movie->setId($fields['id'])
              ->setTitle($fields['title'])
              ->setDescription($fields['description'])
              ->setDate(\DateTime::createFromFormat('Y-m-d',$fields['date']))
              ->setCoverImage($fields['cover_image'])
              ->setDuration($fields['duration']);

              return $movie;
              

    }
}