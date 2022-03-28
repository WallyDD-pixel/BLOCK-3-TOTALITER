<?php

namespace hackatinnov;

class Conference extends Evenement
{
    private $theme ;

    /**
     * Conference constructor.
     * A écrire sur votre copie
     */

    public function __construct($libelle, $dateHeure, $duree, $salle, $lAnimateur, $typePublic,$theme)
    {
        // A compléter sur votre copie
        parent::__construct($libelle, $dateHeure, $duree, $salle, $lAnimateur, $typePublic) ;
        $this->theme = $theme ;

    }


    public function toJson()
    {
        return parent::toJson().",\n \"theme\":\"".$this->theme."\"\n }\n" ;
    }


}