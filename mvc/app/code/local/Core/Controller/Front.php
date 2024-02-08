<?php

class Core_Controller_Front
{
    public function init()
    {
        $request = new Core_Model_Request();
        $moduleName = $request->getModuleName();
        $controllerName = $request->getControllerName();
        $actionName = $request->getActionName();

        // echo $request->getControllerName();
        // echo $request->getActionName();
        // echo $request->getModuleName();

        $classN = $request->getFullControllerClass();
        // echo "$classN<br>";
        $indexAction = new $classN();
        $action = $actionName . 'Action';
        $indexAction->$action();
        // var_dump($indexAction);
    }
}

?>