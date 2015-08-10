<?php namespace Masnegocio\teamwork\Comun;

class MyClass {
 	
	protected $variable;

    public function __construct($variable = "")
    {
        $this->variable = $variable;
    }

    public function getVariable()
    {
        return $this->variable;
    }
 
}
?>