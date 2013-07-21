<?php

use Nette\Application\UI,
    Nette\Database\Table\Selection;

/**
 * Description of TaskList
 *
 * @author Administrator
 */
class CarActions extends UI\Control {
    
    /** @var Array */
    private $cars;
    
    public function __construct($parent, $name, $cars) {
        parent::__construct();
        $this->cars = $cars;
    }
    
    public function render($car)
    {
        $this->template->setFile(__DIR__ . '/CarActions.latte');
        $this->template->car = $car;
        $this->template->render();
    }
    
    public function handleLike($id) {
        //V reale by tu prebela query na db: car->liked = 1
        $this->presenter->flashMessage(sprintf('Liked %s', $this->cars[$id]->name));
        if(!$this->presenter->isAjax()) {
            $this->presenter->redirect('this');
        } else {
            $this->presenter->invalidateControl('flash');
            //ak zakomentujem $this->invalidateControl(), tak ajax prejde bez chyby
            //$this->invalidateControl();
        }
    }
    
    public function handleUnlike($id) {
        //V reale by tu prebela query na db: car->liked = 0
        $this->presenter->flashMessage(sprintf('Unliked %s', $this->cars[$id]->name));
        if(!$this->presenter->isAjax()) {
            $this->presenter->redirect('this');
        } else {
            $this->presenter->invalidateControl('flash');
            $this->invalidateControl();
        }
    }
    
    public function handleDelete($id) {
        //V reale by tu prebela query na db: delete car
        $this->presenter->flashMessage(sprintf('Deleted %s', $this->cars[$id]->name));
        if(!$this->presenter->isAjax()) {
            $this->presenter->redirect('this');
        } else {
            $this->presenter->invalidateControl('flash');
            //ak zakomentujem $this->invalidateControl(), tak ajax prejde bez chyby
            //$this->invalidateControl();
        }
    }
}

?>
