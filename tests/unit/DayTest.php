<?php

/**
 * Description of DayTest
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class DayTest extends PHPUnit_Framework_TestCase
{
    public function testGetTopRooms()
    {
        $day = new Day();
        $this->assertEquals(
            array('supu', 'tupu'), 
            $day->getTopRooms()
        );
    }
}
