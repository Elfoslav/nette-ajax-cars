<?php

use Nette\Application\UI,
    Nette\Database\Table\Selection;

/**
 * Description of TaskList
 *
 * @author Administrator
 */
class Cars extends UI\Control {
    
    /** @var Array */
    private $cars;
    
    public function __construct($parent, $name, $cars) {
        parent::__construct();
        $this->cars = $cars;
    }
    
    public function render()
    {
        $this->template->setFile(__DIR__ . '/Cars.latte');
		$this->template->cars = $this->cars;
        $this->template->render();
    }
    
    public function createComponentCarActions($name) {
        return new CarActions($this, $name, $this->cars);
    }
}

?>
