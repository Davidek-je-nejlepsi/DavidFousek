<?php

class Vozidla implements Ivozidla {

    protected $rychlost;
    protected $palivo;
    protected $barva;
    protected $dvere;
    protected $pedal;
    protected $okna;
    protected $volant;
    protected $kola;

    /**
     * nastavuje rychlost vozidla
     * @param int $rychlost
     */
    function setRychlost($rychlost) {
        $this->rychlost = $rychlost;
    }

    /**
     * nastavuje typ paliva
     * @param string $palivo
     */
    function setPalivo($palivo) {
        $this->palivo = $palivo;
    }

    /**
     * nastavuje barvu vozidla
     * @param string $barva
     */
    function setBarva($barva) {
        $this->barva = $barva;
    }

    /**
     * nastavuje počet dveří
     * @param int $dvere
     */
    function setDvere($dvere) {
        $this->dvere = $dvere;
    }

    /**
     * nastavuje typ pedálu
     * @param string $pedal
     */
    function setPedal($pedal) {
        $this->pedal = $pedal;
    }

    /**
     * nastavuje počet oken
     * @param int $okna
     */
    function setOkna($okna) {
        $this->okna = $okna;
    }

    /**
     * nastavuje typ volantu
     * @param string $volant
     */
    function setVolant($volant) {
        $this->volant = $volant;
    }

    /**
     * nastavuje typ kol
     * @param string $kola
     */
    function setKola($kola) {
        $this->kola = $kola;
    }

    /**
     * vrátí rychlost vozidla
     * @return int
     */
    function getRychlost() {
        return $this->rychlost;
    }

    /**
     * vrátí typ paliva
     * @return string
     */
    function getPalivo() {
        return $this->palivo;
    }

    /**
     * vrátí barvu vozidla
     * @return string
     */
    function getBarva() {
        return $this->barva;
    }

    /**
     * vrátí počet dveří
     * @return int
     */
    function getDvere() {
        return $this->dvere;
    }

    /**
     * vrátí typ pedálu
     * @return string
     */
    function getPedal() {
        return $this->pedal;
    }

    /**
     * vrátí počet kol
     * @return int
     */
    function getOkna() {
        return $this->okna;
    }

    /**
     * vrátí typ volantu
     * @return string
     */
    function getVolant() {
        return $this->volant;
    }

    /**
     * vrátí počet kol
     * @return int
     */
    function getKola() {
        return $this->kola;
    }

}
