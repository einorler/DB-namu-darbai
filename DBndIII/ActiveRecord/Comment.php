<?php

class Comment {
    /** @var integer $id */
    private $id;
    /** @var integer $subjectId */
    private $subjectId;
    /** @var string $date */
    private $date;
    /** @var string $text */
    private $text;
    /** @var string $author */
    private $author;
    /** @var $connection */
    private $connection;

    public function __construct($connection = null){
        if(!isset($connection)) {
            $dbWrapper = new DatabaseWrapper();
            $this->connection = $dbWrapper->getConnection();
        }else{
            $this->connection = $connection;
        }
    }
    public function save(){
        $query = "UPDATE temos SET comment_count = comment_count + 1 WHERE temos.id = ".$this->getSubjectId();
        $this->connection->exec($query);

        $query = "INSERT INTO comments(
                  subjectId, date, text, author)
                  VALUES(".$this->getSubjectId().", '".date('Y m d')."','".$this->getText()."', '".$this->getAuthor()."')";
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
     * @return int
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @param int $id
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

}