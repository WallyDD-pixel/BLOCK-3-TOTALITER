<?php

namespace hackatinnov;

use PHPUnit\Framework\TestCase;

class PlanificationTest extends TestCase
{
    private $planification, $hackaton1, $animateur1;

    protected function setUp():void
    {
        $this->animateur1 = new Membre("Robert","Timothée", "robert.btssio@gmail.com","06 23 54 12 14") ;
        $evtInitPHP = new Formation("Introduction au PHP", "2021-06-19 13:00","2h","Alan Turing", $this->animateur1,
            "étudiants et jeunes développeurs", 40) ;

        $this->hackaton1 = new Hackaton("2021-06-19 13:00","2021-06-20 13:00","Paris ENC","Paris",
            "PHP Hack","Les rois du PHP","PHP revival") ;
        $this->hackaton1->ajouteEvenement($evtInitPHP);
        $this->planification = new Planification("2021-06-18 13:00") ;


    }

    public function testPrepareListeConferencier():void{

        $this->planification->ajouteHackaton($this->hackaton1);
        $this->assertEquals(0,count($this->planification->prepareListeConferencier()), "Probleme liste de conferenciers");

        $evtConfPHP = new Conference("Introduction au PHP", "2021-06-19 13:00","2h","Alan Turing", $this->animateur1,
            "étudiants et jeunes développeurs", "PHP Advanced") ;

        $this->hackaton1->ajouteEvenement($evtConfPHP);

        $this->assertEquals(1,count($this->planification->prepareListeConferencier()), "Probleme liste de conferenciers");

        $evtCon2PHP = new Conference("PHP avancé", "2021-06-26 13:00","2h","Alan Turing", $this->animateur1,
            "jeunes développeurs", "PHP Advanced") ;

        $this->hackaton1->ajouteEvenement($evtCon2PHP);
        $this->assertEquals(1,count($this->planification->prepareListeConferencier()), "Probleme liste de conferenciers");



    }

    public function testAjouthackatons():void{

        $this->assertEquals(0,count($this->planification->getLesHackatons()), "Probleme liste de conferenciers");

        $this->planification->ajouteHackaton($this->hackaton1);
        $this->assertEquals(1,count($this->planification->getLesHackatons()), "Probleme liste de conferenciers");



    }

}
