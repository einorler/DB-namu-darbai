<?php 

include_once "../databaseWrapper.php";
include_once "Tema.php";


class TemaRepository {

    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function getAll(){
        $query = "SELECT * FROM temos";
        $temos = [];
        foreach($this->connection->query($query) as $row){
            $tema = new Tema();
            $tema->setId($row['id']);
            $tema->setDate($row['subject_date']);
            $tema->setName($row['name']);
            $tema->setCommentCount($row['comment_count']);

            $temos[] = $tema;
        }
        return $temos;
    }

    public function save($tema){
        $query = "INSERT INTO temos(name, subject_date, comment_count) VALUES
        ('".$tema->getName()."', '".date('Y, m, d')."',".$tema->getCommentCount().")";
        return $this->connection->query($query);
    }

    public function getRandomId(){
        $ids = [];
        foreach($this->connection->query('SELECT id FROM temos') as $row){
            $ids[] = $row['id'];
        }

        return $ids[ rand(0,sizeof($ids)-1) ];
    }

}