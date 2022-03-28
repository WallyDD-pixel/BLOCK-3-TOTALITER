<?php

namespace hackatinnov;

abstract class Evenement
{
    protected $libelle, $dateHeure, $duree, $salle, $lAnimateur, $typePublic ;

    /**
     * Evenement constructor.
     * @param $libelle
     * @param $dateHeure
     * @param $duree
     * @param $salle
     * @param $lAnimateur
     * @param $typePublic
     */
    public function __construct($libelle, $dateHeure, $duree, $salle, $lAnimateur, $typePublic)
    {
        $this->libelle = $libelle;
        $this->dateHeure = $dateHeure;
        $this->duree = $duree;
        $this->salle = $salle;
        $this->lAnimateur = $lAnimateur;
        $this->typePublic = $typePublic;
    }

    /**
     * @return mixed
     */
    public function getLAnimateur()
    {
        return $this->lAnimateur;
    }

    /**
     * @return mixed
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    protected function toJson(){
        return "{\"libelle\":\"".
            $this->libelle."\", \r\n \"dateHeure\" :\""
            .$this->dateHeure."\", \r\n \"duree\" :\""
            .$this->duree."\", \r\n \"salle\" :\""
            .$this->salle."\", \r\n \"typePublic\" :\""
            .$this->typePublic."\", \r\n \"animateur\" :\""
            .$this->lAnimateur->toJson();
    }



}