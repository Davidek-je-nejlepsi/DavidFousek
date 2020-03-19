<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Forms;

/**
 * Description of DavidFousekProdukt
 *
 * @author uzivatel
 */
class DavidProdukt extends \Nette\Forms\Form{
    
   public function  __construct($parent, $name){
       
       parent::__construct($name);
    
       $this->addText ('Nazev_Produktu','Název produktu' );
       
       $this->addTextArea ('Popis_produktu','Popis produktu');
       
       $this->addImage ("Obrazek","Obrazek");
       
       $this->addText("cena_bez_DPH","cena bez DPH");
       
       $this->addText("cena_s_DPH","cena s DPH");
       
       $this->addText("cena_DPH","cena DPH");
       
       $this->addText("Pocet_kusu","Pocet kusu");
       
       $this->addSelect('Kategorie','Kategorie', array('elektro','drogerie','potraviny'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addRadioList('Aktivita','Aktivita', array ('Akticní','neakticní'));
       
       $this->addCheckbox("Skladem","Vyprodáno");
       
       $this->addSubmit("Ulozit","Ulozit");
       
   }
}
