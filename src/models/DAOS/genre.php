<?php
namespace MVCObjet\models\DAOS;

use MVCObjet\models\entities\genre ;

class GenreDao extends BaseDao
{
    /*
    @param int $id
    @return Genre
    */
    public function findById($id):Genre 
    {
        $stmt = $this->db->prepare("SELECT*FROM genre WHERE id= :id");
        $res = $stmt->execute([':id'=>$id]);
        if ($res) {
        return $stmt->fetchObject(Genre::class);
        } else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }
}



