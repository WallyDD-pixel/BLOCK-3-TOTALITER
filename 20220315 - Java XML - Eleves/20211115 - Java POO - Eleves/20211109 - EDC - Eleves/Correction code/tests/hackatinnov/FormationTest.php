<?php
namespace hackatinnov;
require '../../vendor/autoload.php';


use PHPUnit\Framework\TestCase;


class FormationTest extends TestCase
{
    private $evtFormationPHP;
    private $lAnim ;

    protected function setUp():void
    {
        $this->lAnim = new Membre("Robert","Timothée", "robert.btssio@gmail.com","06 23 54 12 14") ;
        $this->evtFormationPHP = new Formation("Introduction au PHP", "19/06/2021 13:00","2h","Alan Turing", $this->lAnim,
        "étudiants et jeunes développeurs", 40) ;
    }

    public function testAjouterMaterielQuantiteZero():void{
        $leMateriel = new Materiel("Ordinateur portable") ;
        $this->evtFormationPHP->ajouterMateriel($leMateriel->getLibelle(),0);
        $this->assertEquals(0,count($this->evtFormationPHP->getLesMateriels()), "Matériel ajouté alors que la quantité est 0");
    }

    public function testAjouterParticipantLimiteNombrePlaces(){
        $this->evtFormationPHP->setNbPlaces(2);

        $leParticipant1 = new Membre("Mallien", "Yannick", "myannick@mail.com", "06 25 36 14 78") ;
        $this->assertTrue($this->evtFormationPHP->ajouterParticipant($leParticipant1), "mauvaise gestion places dispo") ;

        // A Compléter sur votre copie: ajout possible d'un 2ème participant mais pas d'un 3ème

        $leParticipant2 = new Membre("Rob", "Yannick", "YRob@mail.com", "06 25 36 14 78") ;
        $this->assertTrue($this->evtFormationPHP->ajouterParticipant($leParticipant2), "mauvaise gestion places dispo") ;

        $leParticipant3 = new Membre("Dupond", "Yannick", "yDupond@mail.com", "06 25 36 14 78") ;
        $this->assertFalse($this->evtFormationPHP->ajouterParticipant($leParticipant3), "mauvaise gestion places dispo") ;


        $this->assertSame(2, count($this->evtFormationPHP->getLesMembresParticipants()),
            "erreur dans l'ajout du 3ème participant");


    }

    public function testToJson()
    {
        // A COMPLETER
        $this->evtFormationPHP->setNbPlaces(2);

        $leParticipant1 = new Membre("Mallien", "Yannick", "myannick@mail.com", "06 25 36 14 78") ;
        $this->evtFormationPHP->ajouterParticipant($leParticipant1) ;


        $leParticipant2 = new Membre("Rob", "Yannick", "YRob@mail.com", "06 25 36 14 78") ;
        $this->evtFormationPHP->ajouterParticipant($leParticipant2) ;


        $attendu = '{"libelle":"Introduction au PHP", 
 "dateHeure" :"19/06/2021 13:00", 
 "duree" :"2h", 
 "salle" :"Alan Turing", 
 "typePublic" :"étudiants et jeunes développeurs", 
 "animateur" :"{"nom":"Robert","prenom":"Timoth\u00e9e","mel":"robert.btssio@gmail.com","telephone":"06 23 54 12 14"}, 
 "nbPlaces" : "2", 
"materiels":[ 
] 
"participants":[ 
{"nom":"Mallien","prenom":"Yannick","mel":"myannick@mail.com","telephone":"06 25 36 14 78"},
{"nom":"Rob","prenom":"Yannick","mel":"YRob@mail.com","telephone":"06 25 36 14 78"}]}';

        $this->assertEquals($attendu ,$this->evtFormationPHP->toJson(),
            "Pas bone formattage");


    }

}
