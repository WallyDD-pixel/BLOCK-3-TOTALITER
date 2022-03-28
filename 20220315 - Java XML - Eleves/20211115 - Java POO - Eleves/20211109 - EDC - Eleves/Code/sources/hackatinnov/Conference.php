<?php

namespace hackatinnov;

class Conference extends Evenement
{
    private $theme ;

    /**
     * Conference constructor.
     * A écrire sur votre copie
     */


    public function toJson()
    {
        return parent::toJson().",\n \"theme\":\"".$this->theme."\"\n }\n" ;
    }


}