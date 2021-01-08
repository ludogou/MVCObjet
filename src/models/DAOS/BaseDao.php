<?php
    namespace MVCObjet\models\DAOS;

    use PDO;

    class BaseDao
    {
        protected $db; /*souvenez-vous protected n'est visible que de BaseDao et 
        les classes qui en hériterons*/
        
        public function __construct(){
            $this->db=new PDO('mysql:host=localhost;dbname=cinema','root','root');

        }
    }