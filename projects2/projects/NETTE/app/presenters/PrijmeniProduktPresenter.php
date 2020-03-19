<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of PrijmeniProduktPresenter
 *
 * @author Fousek
 */
class PrijmeniProduktPresenter extends BasePresenter {

    public function renderDefault() {
        
    } 
    
    
    public function createComponentPrijmeniProdukt($name) {
        return new \Forms\PrijmeniProdukt ($this, $name);
    }
}
