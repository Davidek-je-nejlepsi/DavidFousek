<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// 2. Abstraktní třída
abstract class ustredny {
    public function _construct($jmeno, $prijmeni, $vek) {
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->vek = $vek;
    }
}
