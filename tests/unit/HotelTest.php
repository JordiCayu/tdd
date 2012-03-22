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
        $room = new Room('myRoom', 10.50);
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
     * @covers Hotel:getTopRoomsForToday
     */
    public function testTopRoomsForToday()
    {
        $this->assertTrue(
            is_array($this->_hotel->getTopRoomsForToday())
        );
    }
    
    /**
     * @group supu
     * @covers Hotel:getTopRoomsForToday
     */
    public function testTopRoomsForTodayIsolatingObject()
    {
        // Create a Stub
        $stub = $this->getMock('Day');
        
        // Set up the expectation for the getTopRooms() method
        // to be called only once 
        $stub->expects($this->any())
            ->method('getTopRooms')
            ->will($this->returnValue(array('testRoom1', 'testRoom2')));
            
        $hotel = new Hotel($stub);
        
        $hotel->addRoom(new Room('testRoom1', 1));
        
        $rooms = $hotel->getTopRoomsForToday();
        
        $this->assertEquals(1, count($rooms));
        
        $this->assertEquals(
            $rooms[0],
            'testRoom1'
        );
        
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
