<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of UstrednaPresenter
 *
 * @author David Fousek
 */
class UstrednaPresenter extends BasePresenter{
     public function renderDefault() {
        
    } 
    
    
    public function createComponentUstredna($name) {
        return new \Forms\Ustredna ($this, $name);
    }
}
