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
 
    /**
     * Get hotel 'topRooms' for today
     * @return array
     */
    public function getTopRoomsForToday()
    {
        $result = array();
        
        $today = new Day();
        $todayTopRooms = $today->getTopRooms();
         
        foreach ($todayTopRooms as $room) {
            foreach ($this->_rooms as $myRoom) {
                if ($room == $myRoom->getName) {
                    $result[] = $room;
                }
            }
        }
         
        return $result;
    }
}
