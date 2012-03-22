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
    
    /**
     * Creates a new Room
     * @param string $name
     * @param float $price 
     */
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
    
    /**
     * Set the Room's name
     * @param string $name 
     */
    public function setName($name)
    {
        $this->_name = $name;
    }
    
    
    /**
     * Set the Room's price 
     * @param float $price 
     */
    public function setPrice($price)
    {
        $this->_price = $price;
    }
    
    
}
