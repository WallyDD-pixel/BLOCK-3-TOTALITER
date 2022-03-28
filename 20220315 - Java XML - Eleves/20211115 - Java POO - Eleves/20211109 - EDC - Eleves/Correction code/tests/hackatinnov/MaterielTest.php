<?php

namespace hackatinnov;

use PHPUnit\Framework\TestCase;

class MaterielTest extends TestCase
{
    private $unMateriel;

    protected function setUp():void
    {
        $this->unMateriel = new Materiel("Ordinateur") ;

    }

    // Vérification que la méthode d'affichage de Materiel est correctement implémentée

    public function testAffichageMateriel():void{

        $this->assertEquals("Libellé du matériel: Ordinateur",$this->unMateriel,
            "Impossible d'afficher le matériel");
    }
}
