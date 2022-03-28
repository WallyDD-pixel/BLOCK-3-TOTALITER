<?php

namespace hackatinnov;

class Formation extends Evenement
{
    private $nbPlaces ;
    private $lesMateriels ;
    private $lesMembresParticipants;

    public function __construct($libelle, $dateHeure, $duree, $salle, $lAnimateur, $typePublic,$nb)
    {
        // A compléter sur votre copie

    }



    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * @param mixed $nbPlaces
     */
    public function setNbPlaces($nbPlaces)
    {
        if ($nbPlaces >=0)
            $this->nbPlaces = $nbPlaces;
    }

    /**
     * @return mixed
     */
    public function getLesMateriels()
    {
        return $this->lesMateriels;
    }

    /**
     * @return mixed
     */
    public function getLesMembresParticipants()
    {
        return $this->lesMembresParticipants;
    }

    public function ajouterMateriel($unLibelleMateriel, $uneQuantite){
        // A corriger sur votre copie

        if ($unLibelleMateriel != null ){
            if (array_key_exists( $unLibelleMateriel, $this->lesMateriels) == false){
                $this->lesMateriels[$unLibelleMateriel] = $uneQuantite ;
            }
        }
    }

    private function lesMaterielsToJson(){
        $chaineJson = "\"materiels\":[ \r\n";
        $debutChaine = true ;
        foreach ($this->lesMateriels as $lib => $qte){
            if ($debutChaine == false){
                $chaineJson = $chaineJson.",\r\n";
            }
            else {
                $debutChaine = false ;
            }
            $chaineJson = $chaineJson."{\r\n \"libelle\":\"".$lib."\",\r\n\"quantite\":\"".$qte."\"}";
        }
        $chaineJson=$chaineJson."] \r\n";
        return $chaineJson ;
    }

    private function lesParticipantsToJson(){
        // A compléter

    }
    public function  toJson(){
        // A compléter


    }


}