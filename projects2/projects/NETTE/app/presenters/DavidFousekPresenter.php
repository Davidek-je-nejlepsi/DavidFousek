<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of DavidFousek
 *
 * @author uzivatel
 */
class DavidFousekPresenter extends BasePresenter {

 public function renderDefault() {
        
    } 

 public function createComponentDavidProdukt($name) {
  return new \Forms\DavidProdukt($this, $name);
      
    } 

}
