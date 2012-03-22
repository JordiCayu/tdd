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
    
    /**
     * Check if constructor works fine for invalid data
     * @covers Room:__construct 
     */
    public function testConstructorForInvalidData()
    {
        $invalidDataPairs = array(
            array(1, 'hola'),
            array(array(), new stdClass()),
            '1', '1.10'
        );
        
        foreach ($invalidDataPairs as $data) {
            $sw = 0;
            try {
                
                $room = new Room($data[0], $data[1]);
                $sw = 1;
                
            } catch(Exception $e) {
                $this->assertTrue(true);
            }
            
            if ($sw == 1) {
                $this->fail(
                    'Created new room with invalid data: '.
                    var_export($data, true) . 
                    ' and no exception thrown'
                );
            }
        }
    }

    
}
