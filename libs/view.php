<?php 

/**
 * summary
 */
class View 
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    function render($nombre){
    		require 'view/'.$nombre.'.php';
    }
}

 ?>