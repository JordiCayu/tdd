<?php

/**
 * Description of RoomTest
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class RoomTest extends PHPUnit_Framework_TestCase
{

    /**
     * Check if constructor works fine
     * @covers Room:__construct 
     */
    public function testConstructor()
    {
        try {
            
            $this->_room = new Room('Room number 5', 5.95);
            
        } catch(Exception $e) {
            
            $this->fail('An error ocurred when trying to create a new room');
            
        }
    }
    
    
    
}
