<?php

class Calculator_Model_Calculator extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Calculator_Model_Resource_Calculator';
        $this->_collectionClass = 'Calculator_Model_Resource_Collection_Calculator';
        $this->_modelClass = 'calculator/calculator';
    }

    public function getOperators($op)
    {
        $mapping = [
            "add" => '+',
            "minus" => '-',
            "multiply" => '*',
            "divide" => '/',
            "percentage" => '%'

        ];
        if (isset($mapping[$op])){
            return $mapping[$op];
        }
    }
}