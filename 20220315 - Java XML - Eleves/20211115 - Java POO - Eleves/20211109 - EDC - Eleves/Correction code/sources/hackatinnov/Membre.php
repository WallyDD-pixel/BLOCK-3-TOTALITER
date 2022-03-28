<?php

namespace hackatinnov;
class Membre
{

    private $nom, $prenom, $mel, $telephone ;

    /**
     * Membre constructor.
     * @param $nom
     * @param $prenom
     * @param $mel
     * @param $telephone
     */
    public function __construct($nom, $prenom, $mel, $telephone)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mel = $mel;
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getMel()
    {
        return $this->mel;
    }

    public function toJson(){
        return json_encode(["nom" => $this->nom, "prenom"=> $this->prenom, "mel"=>$this->mel, "telephone"=>$this->telephone]) ;
    }


}