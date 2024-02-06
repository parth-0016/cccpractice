<?php

class Controller_Front{

    public function __construct(){
        
    }
    
    public function init(){
        $modelReqObj = new Model_Request();
        $url = $modelReqObj->getRequestUri();
        // echo $url;
        $ClassName = "View_".ucwords(str_replace("/","_",$url));
        // echo $Layout;
        // if($LayoutObj)
        // $LayoutObj = new $ClassName();
        // echo $LayoutObj->toHtml();
    }
}

?>