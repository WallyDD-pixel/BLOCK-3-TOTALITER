<?php

namespace hackatinnov;

use PHPUnit\Framework\TestCase;

class PlanificationTest extends TestCase
{
    private $planification;

    protected function setUp():void
    {
        $animateur1 = new Membre("Robert","Timothée", "robert.btssio@gmail.com","06 23 54 12 14") ;
        $evtInitPHP = new Formation("Introduction au PHP", "2021-06-19 13:00","2h","Alan Turing", $animateur1,
            "étudiants et jeunes développeurs", 40) ;

        $hackaton1 = new Hackaton("2021-06-19 13:00","2021-06-20 13:00","Paris ENC","Paris",
            "PHP Hack","Les rois du PHP","PHP revival") ;
        $hackaton1->ajouteEvenement($evtInitPHP);
        $this->planification = new Planification("2021-06-18 13:00") ;
        $this->planification->ajouteHackaton($hackaton1);

    }

    public function testPrepareListeConferencier():void{

        $this->assertEquals(1,count($this->planification->prepareListeConferencier()), "Probleme liste de conferenciers");

    }

}
