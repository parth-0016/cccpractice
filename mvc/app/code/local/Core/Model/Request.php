<?php
class Core_Model_Request
{
    protected $_moduleName;
    protected $_actionName;
    protected $_controllerName;
    public function __construct()
    {
        $uri = $this->getRequestUri();
        $uriArray = explode("/", $uri);
        // echo $uri;
        // print_r($uriArray);
        $this->_moduleName = $uriArray[0];
        $this->_controllerName = $uriArray[1];
        $this->_actionName = $uriArray[2];
    }


    public function getParams($key = '')
    {
        return ($key == '')
            ? $_REQUEST
            : (isset($_REQUEST[$key])
                ? $_REQUEST[$key]
                : ''
            );
    }

    public function getPostData($key = '')
    {
        return ($key == '')
            ? $_POST
            : (isset($_POST[$key])
                ? $_POST[$key]
                : ''
            );
    }

    public function getQueryData($key = '')
    {
        return ($key == '')
            ? $_GET
            : (isset($_GET[$key])
                ? $_GET[$key]
                : ''
            );
    }

    public function getRequestUri()
    {
        $urii = $_SERVER['REQUEST_URI'];
        // $uri = str_replace("/practice/projectPractice/", "", $uri);
        $uri = str_replace('/practice/mvc/', "", $urii);
        // explode("/",$uri);
        // $uri = end($uri);
        // $uri = substr($uri, 26);
        return $uri;
    }

    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;
    }

    public function getModuleName()
    {
        return $this->_moduleName;
    }
    public function getControllerName()
    {
        return $this->_controllerName;
    }
    public function getActionName()
    {
        return $this->_actionName;
    }

    public function getFullControllerClass(){
        return ucfirst($this->_moduleName) ."_Controller_". ucfirst($this->_controllerName);
    }
}