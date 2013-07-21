<?php

use Nette\Config\Loader;
/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class CarsPresenter extends BasePresenter
{

	public function renderShow($id)
	{
	   $this->template->car = $this->cars[$id]; 	
	}
    
    public function createComponentCarActions($name) {
        return new CarActions($this, $name, $this->cars);   
    }

}
