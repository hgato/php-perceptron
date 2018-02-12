<?php

class Perceptron {
    protected $valuse = [];
    protected $activation = 'activation';
    
    public function __construct($values, $weights)
    {
        $this->values = $this->weighter($values, $weights);
    }
    
    public function think() 
    {
        return $this->perceptron($this->values);
    }
    
    protected function perceptron($values)
    {
        $value = array_sum($values);
        $result = 1/(1 + pow(M_E, $value));
        return $result;
    }
    
    protected function weighter($values, $weights) 
    {
        $result = [];
        for ($i=0; $i<sizeof($values); $i++) {
            $result[] = $values[$i] + $weights[$i];
        }
        return $result;
    }
}

$values = [1, 0.9, 0.5];
$weights = [1.2, 0.9, 0.7];
$perceptron = new Perceptron($values, $weights);
$result = $perceptron->think();
var_dump($result);
