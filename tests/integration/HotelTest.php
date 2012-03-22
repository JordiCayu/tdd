<?php

/**
 * Description of Hotel
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class Integration_HotelTest extends PHPUnit_Framework_TestCase
{
    
    
    /**
     * Check if process of setting rooms and then 
     * getting it works fine
     */
    public function testAddAndGetRooms()
    {
        $hotel = new Hotel();
        
        $room1 = new Room('Room1', 10);
        $hotel->addRoom($room1);

        $room2 = new Room('Room2', 10);
        $hotel->addRoom($room2);

        $room3 = new Room('Room3', 10);
        $hotel->addRoom($room3);
        
        $this->assertEquals(
            array($room1, $room2, $room3),
            $hotel->getRooms()
        );
    }
    
    
    
}
