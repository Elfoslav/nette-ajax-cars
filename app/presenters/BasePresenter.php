<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    public $cars = array();
    
    public function initCars() {
        $this->cars = array(
            new Car('Honda', 0),
            new Car('Hyundai', 1),
            new Car('Alfa Romeo', 2),
            new Car('Porsche', 3),
            new Car('BMW', 4),
            new Car('Ford', 5)
        );
    }
    
    public function startup() {
        parent::startup();
        $this->initCars();
    }    
}
