<?php

class Core_Controller_Front
{
    public function init()
    {
        $request = Mage::getModel('core/request'); //obj of core_model_request is created here 
        $actionName = $request->getActionName() . 'Action';
        $fullClassName = $request->getFullControllerClass();
        
        $controller = new $fullClassName();
        $controller->$actionName();
    }
}

?>