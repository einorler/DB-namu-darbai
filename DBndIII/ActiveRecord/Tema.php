<?php
require_once('Comment.php');
require_once('../databaseWrapper.php');
class Tema {

    /** @var integer $id
     * */
    private $id;
    /** @var string $date
     * */
    private $date;
    /** @var string $name
     * */
    private $name;
    /** @var string $comments
     * */
    private $comments;
    /** @var integer $commentCount
     * */
    private $commentCount;
    /** @var  $connection
     * */
    private $connection;

    public function __construct($connection = null){
        if(!isset($connection)) {
            $dbWrapper = new DatabaseWrapper();
            $this->connection = $dbWrapper->getConnection();
        }else{
            $this->connection = $connection;
        }
        $this->commentCount = 0;
    }
    /**
     * @return array
     */
    public static function loadAll(){
        $dbWrapper = new DatabaseWrapper();
        $connection = $dbWrapper->getConnection();
        $query = "SELECT * FROM temos;";
        $temos = [];
        foreach($connection->query($query) as $row){
            $tema = new Tema($connection);
            $tema->setId($row['id']);
            $tema->setDate($row['subject_date']);
            $tema->setName($row['name']);
            $query = 'SELECT * FROM comments INNER JOIN temos ON comments.subjectId = '.$row['id']." AND temos.id = ".$row['id'].";";
            $comments = [];
            foreach($connection->query($query) as $i){
                $comment = new Comment($connection);
                $comment->setId($i['id']);
                $comment->setsubjectId($i['subjectId']);
                $comment->setText($i['text']);
                $comment->setDate($i['date']);
                $comment->setAuthor($i['author']);

                $comments[] = $comment;
            }
            foreach($comments as $comment){
                $tema->setComments($comment);


            }
            $temos[] = $tema;

        }

        return($temos);
    }
    public function save(){
        $query = "INSERT INTO temos(name, subject_date, comment_count) VALUES('".$this->getName()."', '".date('Y m d')."', ".$this->getCommentCount().")";
        return $this->connection->exec($query);

    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param Comment $comments
     */
    public function setComments($comment)
    {
        $this->comments[] = $comment;
    }
     /**
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param int $id
     */
    public function setCommentCount($commentCount)
    {

        $this->commentCount = $commentCount;
    }

}