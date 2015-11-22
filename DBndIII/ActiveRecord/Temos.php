<?php 

require_once('Tema.php');

class Temos implements Iterator{

	/** @var array $subjectId
     * */
	private $subjects = [];
	/** @var integer $index
     * */
	private $index = 0;
	/**
     * @return array
     */
	public function loadAll(){
        return $this->subjects = Tema::loadAll();
    }

    public function current()
    {
        return $this->subjects[$this->index];
    }


    public function next()
    {
        $this->index ++;
    }


    public function key()
    {
        return $this->index;
    }


    public function valid()
    {
        return isset($this->subjects[$this->key()]);
    }


    public function rewind()
    {
        $this->index = 0;
    }

}