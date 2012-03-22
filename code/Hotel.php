<?php

/**
 * Description of Hotel
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class Hotel 
{
    protected $_rooms = array();
 
    /**
     * Get all rooms associated to hotel
     * @return Room
     */
    public function getRooms()
    {
        return $this->_rooms;
    }
    
    
    /**
     * Add a room to current hotel
     * @param Room $room 
     */
    public function addRoom(Room $room)
    {
        $this->_rooms[] = $room;
    }
    
}
