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
       
       $this->addText ('Nazev_Ustredny','Název Ustredny' )->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addTextArea ("Popis_Ustredny","Popis Ustredny")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addImage ("Obrazek","Obrazek");
       
       $this->addText("cena_bez_DPH","cena bez DPH")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addText("cena_s_DPH","cena s DPH")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addText("cena_DPH","cena DPH")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addSelect('Kategorie','Kategorie', array('Eldes','Jablotron','Texecom'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addText("Pocet_kusu","Pocet kusu")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addRadioList('Trida','Trida', array ('Prvni','Druha'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addCheckbox("Skladem","Vyprodáno")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addCheckbox("Nakup","Velkoobchod")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addSubmit("Ulozit","Ulozit")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addPassword("Heslo", "Heslo")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addUpload("zvuk","zvuk");
       
       $this->onSuccess[] = [$this, "formSubmitted"];
       
     
   }
   
   public function formSubmitted($form){
       $values = $this->getValues(true);
       dump($values);
   }
   
}

