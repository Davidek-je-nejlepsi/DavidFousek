<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Forms;

/**
 * Description of PrijmeniProdukt
 *
 * @author Fousek
 */
class PrijmeniProdukt extends \Nette\Application\UI\Form{
    
   public function  __construct($parent, $name){
       
       parent::__construct($parent, $name);
       
       
       $this->addText ('Nazev_hovna','Název hovna' );
       
       $this->addTextArea ("Popis_Hovna","Popis hovna");
       
       $this->addImage ("Obrazek","Obrazek");
       
       $this->addText("cena","cena");
       $this->addSelect('Kategorie','Kategorie', array('pevne','tekute','kase'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addRadioList('Aktivita','Aktivita', array ('Akticní','neakticní'));
       
       $this->addCheckbox("Skladem","Vyprodáno");
       
       $this->addSubmit("Ulozit","Ulozit");
       
       $this->addPassword("Heslo", "Heslo");
       
       $this->addUpload("zvuk","zvuk");
       
       $this->onSuccess[] = [$this, "formSubmitted"];
       
     
   }
   
   public function formSubmitted($form){
       $values = $this->getValues(true);
       dump($values);
       die;
   }
   
}
