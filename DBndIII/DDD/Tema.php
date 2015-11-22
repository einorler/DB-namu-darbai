<?php

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