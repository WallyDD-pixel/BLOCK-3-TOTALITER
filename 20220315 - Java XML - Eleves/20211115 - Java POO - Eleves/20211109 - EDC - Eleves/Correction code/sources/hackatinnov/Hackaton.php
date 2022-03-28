<?php
namespace hackatinnov;

class Hackaton
{
    private $dateHeureDebut ;
    private $dateHeureFin ;
    private $lieu ;
    private $ville;
    private $theme ;
    private $affiche ;
    private $objectifs ;
    private $lesEvenements ;

    /**
     * Hackaton constructor.
     * @param $dateHeureDebut
     * @param $dateHeureFin
     * @param $lieu
     * @param $ville
     * @param $theme
     * @param $affiche
     * @param $objectifs
     */
    public function __construct($dateHeureDebut, $dateHeureFin, $lieu, $ville, $theme, $affiche, $objectifs)
    {
        $this->dateHeureDebut = $dateHeureDebut;
        $this->dateHeureFin = $dateHeureFin;
        $this->lieu = $lieu;
        $this->ville = $ville;
        $this->theme = $theme;
        $this->affiche = $affiche;
        $this->objectifs = $objectifs;
        $this->lesEvenements = array() ;
    }

    public function ajouteEvenement($unEve){
        array_push($this->lesEvenements, $unEve) ;
    }


    public function evtsInitiationToJson(){
        $chaineJson = '"EvenementsInitiations":[';
        foreach($this->lesEvenements as $evt){
            if ($evt instanceof Formation){
                $chaineJson = $chaineJson.$evt->toJson() ;
            }
        }
        return $chaineJson."]\n" ;
    }

    public function planningParParticipant($unMelPart){
        $dicoEvtPart = array() ;
        foreach ($this->lesEvenements as $evt)
            if ($evt instanceof Formation){
                foreach ($evt->getLesMembresParticipants() as $unMembre){
                    if ($unMembre->getMel() == $unMelPart)
                        $dicoEvtPart[$evt->getDateHeure()] = $evt ;
                }
            }

        return $dicoEvtPart ;
    }

    /**
     * @return array
     */
    public function getLesEvenements(): array
    {
        return $this->lesEvenements;
    }




    }