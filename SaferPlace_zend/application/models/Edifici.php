<?php

class Application_Model_Edifici extends App_Model_Abstract
{
    protected  $_name='edificio';
    //protected $_rowClass='Application_Model__Edifici';
    

    public  function getEdificiSet()
    {
        return $this->getResource('Edifici')->getAll();
    }

}
