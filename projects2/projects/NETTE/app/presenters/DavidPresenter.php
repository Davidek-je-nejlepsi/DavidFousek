<?php

namespace App\Presenters;

/**
 * Description of FousekPresenter
 *
 * @author Fousek
 */
class DavidPresenter extends BasePresenter {

    public function renderDefault() {
        
    }

    public function renderSuccess() {
        $params = $this->getRequest()->getParameters();
        $this->template->params =$params;
       
    }
    
    
    public function createComponentRegister($name) {
        return new \Register($this, $name);
    }
}
