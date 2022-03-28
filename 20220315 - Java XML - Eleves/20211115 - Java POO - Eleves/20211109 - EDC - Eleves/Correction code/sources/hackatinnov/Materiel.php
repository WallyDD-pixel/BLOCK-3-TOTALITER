<?php
namespace hackatinnov;

class Materiel
{
    private $libelle  ;

    /**
     * Materiel constructor.
     * @param $libelle
     */
    public function __construct($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Libellé du matériel: ".$this->getLibelle() ;
    }


}