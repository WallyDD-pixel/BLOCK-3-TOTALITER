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



}