<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author Fousek
 */
class Register extends \Nette\Forms\Form {
    
    public function __construct($parent, $name){
        
        echo '<center><H1>Dotazník<H1>';
        
        parent::__construct($name);
        
        $this->setAction($parent->link("David:success"));
        
        $this->addGroup('Kontejner');
        
        $this->setMethod("GET");
        
        $this->addEmail('email', 'Email')->setRequired('Email je nutny!!!!!')
                 ->addRule(Nette\Forms\Form::EMAIL, 'Email není platný');
         
        $this->addCheckbox('sex','sex');
        $count = 10;
        for($i = 1; $i < $count+1; $i++){
            $this->addCheckbox($i, 'Housek'.$i);
        }
        
        $this->addSelect('pohlavi','Pohlavi', array('-','muž','žena','plzeňák'))->setRequired('Nutný výběr')
              ->addRule(Nette\Forms\Form::REQUIRED,'Nutný výběr') ;
        
        $this->addSelect('Mesto',' Mesto', array('Praha','Velvary'));
        
        $this->addTextArea('Buzerant','Buzerant')->setRequired('Max. délka 10')
                ->addRule(Nette\Forms\Form::MAX_LENGTH ,10 ,'Max. délka 10');
        
        $this->addError('Kokot','Čurák');
        
        $this->addCheckboxList('Sparta','Sparta',array('je','víc','než','Plzeň'));
        
        $this->addRadioList('Internet','Internet', array ('vodafone','o2'));
        
        $this->addText('Hovno','Hovno')->setRequired('Hovno musí být vyplněné')
               ->addRule(Nette\Forms\Form::MIN_LENGTH ,'Minimálně 4 znaky',4);
        
        $this->addPassword('heslo','heslo')->setRequired('Min. 6 znaků')
                ->addRule(Nette\Forms\Form::MIN_LENGTH ,'Musí obsahovat min. 6 znaků ',6);
        $this->addPassword('heslo2','znovu heslo')->setRequired('Heslo znovu')
                ->setAttribute('placeholder','Zadej znovu heslo')
              ->addRule(Nette\Forms\Form::EQUAL, 'Heslo není stejné', $this{'heslo'});
        $this->addSubmit('odeslat', 'Odeslat');
       
        echo '<h2>';
        $this->addCheckbox('ano','Souhlasím se zpracováním osobních údajů');
        echo '</h2>';
        return $this;
        
    }
   
    }