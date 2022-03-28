<?php
namespace hackatinnov;

class Planification
{
    private $dateDePlanification ;
    private $lesHackatons ;

    /**
     * @param $dateDePlanification
     */
    public function __construct($dateDePlanification)
    {
        $this->dateDePlanification = $dateDePlanification;
        $this->lesHackatons = array() ;
    }


}