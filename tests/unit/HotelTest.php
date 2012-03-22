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
    
    
    /**
     * @covers Hotel::addRoom
     */
    public function testAddRoomsOnFailedDataType()
    {
        $failingData = $this->_getFailingData();
        foreach ($failingData as $data) {
            try {
                
                $this->_hotel->addRoom($data);
                $this->fail(
                    'Testing Hotel:addRoom with value: "' . 
                    var_export($data, true) . 
                    '" and no exception throwed'
                );
                
            } catch(Exception $e) {
                // Expected exception
                $this->assertTrue(true);
            }
        }
        
    }
    
    
    /**
     * @covers 
     */
    public function testTopRoomsForToday()
    {
        $this->_hotel->getTopRoomsForToday();
    }
    
    
    
    /**
     * Get all filetypes for testing
     * @return array
     */
    protected function _getFailingData()
    {
        return array(
            array(),
            new stdClass(),
            'supu',
            1,
            true,
            false,
            1.10
        );
    }
    
    
}
