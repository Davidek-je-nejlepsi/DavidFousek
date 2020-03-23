<?php

include 'class/iustrednyFousek.php'; // inkludace interfacu
include 'class/ustrednyFousek.php'; // inkludovani třídy abstract
include 'class/ustrednaFousek.php'; // inkludovani třídy

$napetiFousek = 12; // atribut napětí

$newFousek = new ustrednaFousek(); // instance nové třídy

var_dump($newFousek::TYPE); // vypsání constanty

$newFousek->setNapetiFousek($napetiFousek);   // nastavení atributů -instanční přístup

var_dump($newFousek->getNapetiFousek());        // vypsani atributu - instanční způsob