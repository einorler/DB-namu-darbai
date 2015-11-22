<?php 

include_once "../databaseWrapper.php";
include_once "Comment.php";


class CommentRepository {

    private $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function getAllBySubjectId($subId){
        $query = "SELECT * FROM comments WHERE subjectId = {$subId}";

        $comments = [];

        foreach($this->connection->query($query) as $row){
            $comment = new Comment();
            $comment->setSubjectId($row['subjectId']);
            $comment->setDate($row['date']);
            $comment->setText($row['text']);
            $comment->setAuthor($row['author']);
            $comments[] = $comment;
        }

        return $comments;
    }

    public function save($comment){
        $query = "UPDATE temos SET comment_count = comment_count + 1 WHERE id = ".$comment->getSubjectId();
        $this->connection->query($query);

        $query = "INSERT INTO comments(subjectId, date, text, author) VALUES
        (".$comment->getSubjectID().",'".date('Y, m, d')."','".$comment->getText()."', '".$comment->getAuthor()."')";
        return $this->connection->query($query);
    }
}