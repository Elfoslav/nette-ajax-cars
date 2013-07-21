<?php

class Car extends \Nette\Object {

    /** @var int **/
    public $id;
    /** @var string **/
    public $name;
    /** @var boolean **/
    public $liked;
    
    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
        $this->liked = false;
    }
}