<?php

class Vesnice {

    private $Vesnice;

    function __construct($Vesnice) {
        $this->Vesnice = $Vesnice;
    }

    public function nejvetsivesnice() {
        $pocet_obyvatel = NULL;
        foreach ($this->Vesnice as $keys => $values) {
            foreach ($values as $key => $value) {
                if ($key == "pocet_obyvatel")
                    $pocet_obyvatel = $value;
            }
        } return $pocet_obyvatel;
    }

    public function nejmensivesnice() {
        $pocet_obyvatel2 = 0;
        foreach ($this->Vesnice as $key => $values) {
            foreach ($values as $key => $value) {
                if ($key == "pocet_obyvatel" AND ( $pocet_obyvatel2 == 0 OR $pocet_obyvatel2 > $value)) {
                    $pocet_obyvatel2 = $value;
                }
            }
        }
        return $pocet_obyvatel2;
    }

    /**
     * @author John Doe <john.doe@example.com>
     * @return int
     * @copyright (c) 2018, John Doe
     * @param int 
     */
    public function nejvicebaraku() {
        $pocet_baraku = NULL;
        foreach ($this->Vesnice as $key => $values) {
            foreach ($values as $key => $value) {
                if ($key == "pocet_baraku")
                    $pocet_baraku = $value;
            }
        } return $pocet_baraku;
    }

    /**
     * @author John Doe <john.doe@example.com>
     * @return int
     * @copyright (c) 2018, John Doe
     * @param int 
     * @version first
     */
    public function nejmenebaraku() {

        $pocet_baraku2 = 0;
        foreach ($this->Vesnice as $key => $values) {
            foreach ($values as $key => $value) {
                if ($key == "pocet_baraku" AND ( $pocet_baraku2 == 0 OR $pocet_baraku2 > $value)) {
                    $pocet_baraku2 = $value;
                }
            }
        }
        return $pocet_baraku2;
    }

}
