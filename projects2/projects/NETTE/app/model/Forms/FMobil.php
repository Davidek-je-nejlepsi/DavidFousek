<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Forms;

/**
 * Description of FMobil
 *
 * @author David Fousek
 */
class FMobil extends \Nette\Application\UI\Form{
    
   public function  __construct($parent, $name){
       
       parent::__construct($parent, $name);
       
       $this->addGroup('Produkt');
       
       $this->addText ('Nazev_Mobilu','Název Mobilu' )->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addTextArea ("Popis_Mobilu","Popis Mobilu")->setRequired('Min. 3 znaky')
               ->addRule(\Nette\Forms\Form::MIN_LENGTH,'Musí obsahovat min. 3 znaků ',3);
       
       $this->addImage ("Obrazek","Obrazek");
       
       $this->addText("cena_bez_DPH","cena bez DPH")->setRequired('Musí být číslo')
              ->addRule(\Nette\Forms\Form::INTEGER,'Musí být číslo');
       
       $this->addText("cena_s_DPH","cena s DPH")->setRequired('Musí to být číslo od 1 do 99999999999999999999')
              ->addRule(\Nette\Forms\Form::INTEGER,'Musí to být číslo od 1 do 99999999999999999999')
              ->addRule(\Nette\Forms\Form::RANGE, 'Musí to být číslo od 1 do 99999999999999999999',[1, 99999999999999999999]);
              
       $this->addText("cena_DPH","cena DPH")->setRequired('Musí být číslo')
              ->addRule(\Nette\Forms\Form::INTEGER,'Musí být číslo');
       
       $this->addSelect('Operacni_System','Operační systém', array('Robot','Nakousnuté jablko','Vokna', 'Ostružina'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Výběr OS se musí provést');
       
       $this->addText("Pocet_kusu","Pocet kusu")->setRequired('Musí to být číslo od 1 do 99999999999999999999')
              ->addRule(\Nette\Forms\Form::INTEGER,'Musí to být číslo od 1 do 99999999999999999999')
              ->addRule(\Nette\Forms\Form::RANGE, 'Musí to být číslo od 1 do 99999999999999999999',[1, 99999999999999999999]);
       
       $this->addRadioList('Stav','Stav', array ('Nové','Zánovní','Použité'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addSelect('Material','Materiál', array('Plast','Kov','Sklo',))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       $this->addCheckbox("Skladem","Vyprodáno")->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addCheckbox("Nakup","Velkoobchod")->setRequired('Povinnost výběru')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Povinnost výběru');
       
       $this->addUpload("zvuk","zvuk");
       
       $this->addGroup('Kontaktní údaje');
       
       $this->addEmail("E_mail","E-mail")->setRequired('Email je nutny!!!!!')
                ->addRule(\Nette\Forms\Form::EMAIL, 'Email není platný');
       
       $this->addPassword('heslo','heslo')->setRequired('Min. 6 znaků')
               ->addRule(\Nette\Forms\Form::MIN_LENGTH,'Musí obsahovat min. 6 znaků ',6);
       
       $this->addPassword('heslo2','znovu heslo')->setRequired('Heslo znovu')
                ->setAttribute('placeholder','Zadej znovu heslo')
                ->addRule(\Nette\Forms\Form::EQUAL, 'Heslo není stejné', $this{'heslo'});
              
       $this->addSubmit("Ulozit","Ulozit")->setRequired('Musíte kliknout')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Musíte kliknout');
       
       $this->onSuccess[] = [$this, "formSubmitted"];
       
   }
   
   public function formSubmitted($form){
       $values = $this->getValues(true);
       dump($values);
   }
}