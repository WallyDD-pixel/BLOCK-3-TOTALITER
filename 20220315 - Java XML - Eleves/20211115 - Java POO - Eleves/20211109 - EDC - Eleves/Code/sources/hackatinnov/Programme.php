<?php


namespace tocook;


class Programme
{
    private $id, $titre, $duree, $laCategorieCSA, $lEmission ;



    /**
     * Programme constructor.
     * @param $id
     * @param $titre
     * @param $duree
     * @param $laCategorieCSA
     * @param $lEmission
     */
    public function __construct($id, $titre, $duree,CategorieCSA $laCategorieCSA,Emission $lEmission)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->duree = $duree;
        $this->laCategorieCSA = $laCategorieCSA;
        $this->lEmission = $lEmission;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getLaCategorieCSA()
    {
        return $this->laCategorieCSA;
    }

    /**
     * @param mixed $laCategorieCSA
     */
    public function setLaCategorieCSA(CategorieCSA $categorieCSA)
    {
        $this->laCategorieCSA = $categorieCSA;
    }

    /**
     * @return mixed
     */
    public function getLEmission()
    {
        return $this->lEmission;
    }

    /**
     * @param mixed $lEmission
     */
    public function setLEmission(Emission $lEmission)
    {
        $this->lEmission = $lEmission;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Programme{" .
            "id=" . $this->getId() .
            ", titre='" . $this->getTitre()  .
            ", duree=" . $this->getDuree() .
            ", laCategorieCSA=" . $this->getLaCategorieCSA() .
            ", lEmission=" . $this->getLEmission() .
            '}';
    }


}