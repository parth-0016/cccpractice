<?php

class Calculator_Controller_Calculator extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head');

        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('calculator/userInterface');
        $child->addChild('form', $productForm);

        $calList = $layout->createBlock('calculator/list');
        $child->addChild('list', $calList);

        $layout->toHtml();
    }

    public function saveAction()
    {
        echo 23232;
        echo "<pre>";
        $session = Mage::getSingleton('core/session');

        $data = $this->getRequest()->getParams('calc');
        // print_r($data);
        $op = $data['operator'];
        $num1 = $data['from'];
        $num2 = $data['to'];
        switch ($op) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "minus":
                $result = $num1 - $num2;
                break;
            case "divide":
                $result = $num1 / $num2;
                break;
            case "percentage":
                $result = $num1 % $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            default:
                echo "Invalid input";
        }
        $data['result'] = $result;
        $data['session_id'] = $session->getId();
        // print_r($data);
        $product = Mage::getModel('calculator/calculator')
            ->setData($data)
            ->save();
        $loc = Mage::getBaseUrl('calculator/calculator/form');
        header("Location: $loc");
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $layout->getChild('head')
            ->addCss('product/list.css');

        $calList = $layout->createBlock('calculator/admin_list');
        $child->addChild('list', $calList);

        $layout->toHtml();
    }

    public function deleteAction()
    {
        Mage::getModel('calculator/calculator')
            ->load($this->getRequest()->getParams('id', 0))
            ->delete();
        $this->setRedirect('calculator/calculator/list');
    }

}