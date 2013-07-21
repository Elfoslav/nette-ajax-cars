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
    
    public function handleLike($id) {
        //V reale by tu prebela query na db: car->liked = 1
        $this->cars[$id]->liked = 1;
        $this->flashMessage(sprintf('Liked %s', $this->cars[$id]->name));
        if(!$this->isAjax()) {
            $this->redirect('this');
        } else {
            $this->invalidateControl();
        }
    }
    
    public function handleUnlike($id) {
        //V reale by tu prebela query na db: car->liked = 1
        $this->cars[$id]->liked = 1;
        $this->flashMessage(sprintf('Liked %s', $this->cars[$id]->name));
        if(!$this->isAjax()) {
            $this->redirect('this');
        } else {
            $this->invalidateControl('flash');
            $this->invalidateControl('carActions');
        }
    }
    
    public function handleDelete($id) {
        //V reale by tu prebela query na db: car->liked = 1
        $this->flashMessage(sprintf('Deleted %s', $this->cars[$id]->name));
        if(!$this->isAjax()) {
            $this->redirect('this');
        } else {
            $this->invalidateControl('flash');
            $this->invalidateControl('carActions');
        }
    }

}
