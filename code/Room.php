<?php

/**
 * Description of Room
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class Room 
{

    protected $_name;
    protected $_price;
    
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
    
    public function setName($name)
    {
        $this->_name = $name;
    }
    
    public function setPrice($price)
    {
        $this->_price = $price;
    }
    
    
}
