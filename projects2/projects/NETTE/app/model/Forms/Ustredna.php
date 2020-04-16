<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Forms;

/**
 * Description of Ustredna
 *
 * @author David Fousek
 */
class Ustredna extends \Nette\Application\UI\Form{
    
   public function  __construct($parent, $name){
       
       parent::__construct($parent, $name);
       
       $this->addGroup('Kontejner');
       
       $this->addText ('Nazev_Ustredny','Název Ustredny' );
       
       $this->addTextArea ("Popis_Ustredny","Popis Ustredny");
       
       $this->addImage ("Obrazek","Obrazek");
       
       $this->addText("cena_bez_DPH","cena bez DPH");
       
       $this->addText("cena_s_DPH","cena s DPH");
       
       $this->addText("cena_DPH","cena DPH");
       
       $this->addSelect('Kategorie','Kategorie', array('Eldes','Jablotron','Texecom'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addText("Pocet_kusu","Pocet kusu");
       
       $this->addRadioList('Trida','Trida', array ('Prvni','Druha'));
       
       $this->addCheckbox("Skladem","Vyprodáno");
       
       $this->addCheckbox("Nakup","Velkoobchod");
       
       $this->addSubmit("Ulozit","Ulozit");
       
       $this->addPassword("Heslo", "Heslo");
       
       $this->addUpload("zvuk","zvuk");
       
       $this->onSuccess[] = [$this, "formSubmitted"];
       
     
   }
   
   public function formSubmitted($form){
       $values = $this->getValues(true);
       dump($values);
   }
   
}

