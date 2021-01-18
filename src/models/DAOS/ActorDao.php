<?php
namespace MVCObjet\models\DAOS;

use MVCObjet\models\entities\actor ;
use PDOException;

class ActorDao extends BaseDao
{
    public function findAll(){
        $stmt = $this->db->prepare( "SELECT * FROM actor");
        $res = $stmt->execute();
        if ($res) {
            $acteurs = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $acteurs[] = $this->createObjectFromFields($row);
            }
            return $acteurs;
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function findByMovie($movieId){
        $stmt=$this->db->prepare("
        SELECT id,first_name as firstName, last_name as lastName
        FROM actor
        INNER JOIN movies_actors ON movies_actors.actor_id = actor.id
        WHERE movie_id = :movieId
        ");
        $res=$stmt->execute(['movieId'=>$movieId]);
        if ($res){
            return $stmt->fetchAll(\PDO::FETCH_CLASS, Actor::class);
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }

    }

    public function findById($id): Actor
    {
        $stmt = $this->db->prepare("SELECT * FROM actor WHERE id = :id");
        $res = $stmt->execute([':id' => $id]);

        if($res){
            return $stmt->fetchObject(actor::class);
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function createObjectFromFields($fields): actor
    {
        //
        // liaison entre la donnée BDD et l'objet 
        // ici on voit le chainage ->setId->setName 
        //
        $acteurs = new actor();
        $acteurs->setId($fields['id'])
              ->setFirstName($fields['first_name'])
              ->setLastName($fields['last_name']);         

        return $acteurs;
       
    }
}
