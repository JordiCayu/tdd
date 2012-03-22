<?php

/**
 * Description of HotelTest
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class HotelTest extends PHPUnit_Framework_TestCase
{
    protected $_hotel;
    
    public function setUp()
    {
        $this->_hotel = new Hotel();
    }
    
    /**
     * @covers Hotel::getRooms
     */
    public function testGetRoomsCorrectType()
    {
        $hotelRooms = $this->_hotel->getRooms();
        $this->assertTrue(is_array($hotelRooms));
    }
    
    
    /**
     * @covers Hotel::addRoom
     */
    public function testAddRoomsToHotel()
    {
        $room = new Room();
        $this->_hotel->addRoom($room);
    }
    
}
