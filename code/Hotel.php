<?php

/**
 * Description of Hotel
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class Hotel 
{
    protected $_rooms = array();
    
    public function getRooms()
    {
        return $this->_rooms;
    }
    
}
