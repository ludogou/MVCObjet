<?php
namespace MVCObjet\models\DAOS;

use MVCObjet\models\entities\director ;

class DirectorDao extends BaseDao
{
    public function findAll(){
        $stmt = $this->db->prepare( "SELECT * FROM director");
        $res = $stmt->execute();
        if ($res) {
            $directors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $directors[] = $this->createObjectFromFields($row);
            }
            return $directors;
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function createObjectFromFields($fields): director
    {
   
        $directors = new director();
        $directors->setId($fields['id'])
              ->setFirstName($fields['first_name']) 
              ->setLastName($fields['last_name']);         

        return $directors;
       
    }
}
