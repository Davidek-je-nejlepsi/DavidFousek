<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of FMobilPresenter
 *
 * @author David Fousek
 */
class FMobilPresenter extends BasePresenter{
     public function renderDefault() {
        
    } 
    
    
    public function createComponentFMobil($name) {
        return new \Forms\FMobil($this, $name);
    }
}
