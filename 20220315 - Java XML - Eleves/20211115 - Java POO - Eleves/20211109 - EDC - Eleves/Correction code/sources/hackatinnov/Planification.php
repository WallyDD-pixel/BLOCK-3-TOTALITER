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

    /**
     * @return mixed
     */
    public function getDateDePlanification()
    {
        return $this->dateDePlanification;
    }

    /**
     * @return array
     */
    public function getLesHackatons(): array
    {
        return $this->lesHackatons;
    }



    public function ajouteHackaton($unHackaton){
        $this->lesHackatons[] = $unHackaton ;
    }

    public function prepareListeConferencier() {
        $listeConferencier = array() ;
        foreach ($this->getLesHackatons() as $unHackaton){
            foreach ($unHackaton->getLesEvenements() as $unEvt) {
                if ($unEvt instanceof Conference && $unEvt->getDateHeure() > $this->dateDePlanification)
                    $listeConferencier[] = $unEvt->getLAnimateur()->getMel() ;

            }
        }

        return array_unique($listeConferencier) ;

    }

}