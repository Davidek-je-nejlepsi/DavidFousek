<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author Fousek
 */

namespace Forms;

class Contact extends \Nette\Application\UI\Form {

    function __construct($parent = NULL, $name = NULL) {
        parent::__construct($parent, $name);

        $this->setAction($parent->link('David:success'));

        $this->addText('fromEmail','Odesilatel')->setRequired('Email je nutny!!!!!')
                ->addRule(\Nette\Forms\Form::EMAIL, 'Email není platný.')
                ->setAttribute('placeholder', 'zadej svuj email');

        $this->addText('toEmail','Prijemce')
                ->setValue('d.fousek@seznam.cz')->setAttribute('readonly');
        
        $this->addText('fromTelefon','Telefon')->setRequired('Telefon musí být vyplněný')
               ->addRule(\Nette\Forms\Form::INTEGER,'Musí obsahovat čísla.')
               ->setAttribute('placeholder', 'Telefoní číslo');
       
        $this->addTextArea('Buzerant','Buzerant')->setRequired('Max. délka 10');
   
        $this->addSubmit('odeslat', 'Odeslat');
        $this->onSuccess[] = [$this, 'formSubmitted'];
       
    }
    
    public function formSubmitted($form){
        $values = $this->getValues(true);
        dump($values);
        dump($values["fromEmail"]);
        $mail = new \Nette\Mail\Message();
        
        $mail->addTo('d.fousek@seznam.cz');
        echo 'odesláno';
    }
    
 
}

