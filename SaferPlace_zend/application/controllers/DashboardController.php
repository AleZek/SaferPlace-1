<?php

class DashboardController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        //istanzio l'insieme degli edifici estraendole dal model
        $edificiModel = new Application_Model_Edifici();

        //TODO: istanzio l'insieme delle NOTIFICHE estraendole dal model
        $notificheModel = new Application_Model_Faq();// hai messo faq ma qui ci vogliono sengalazioni ovvero notifiche

        //assegno alla view le variabili
        $this->view->assign("edifici", $edificiModel->getEdifici());
        //$this->view->assign("notifiche",$notificheModel->getFaqSet());
    }


}
