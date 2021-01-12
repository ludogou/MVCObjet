<?php
namespace MVCObjet\models\DAOS;

use MVCObjet\models\entities\actor ;

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
