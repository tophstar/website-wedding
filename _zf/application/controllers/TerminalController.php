<?php

class TerminalController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	return array('value'=>'blue');
        // action body
    }


}