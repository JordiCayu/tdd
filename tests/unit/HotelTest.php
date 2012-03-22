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
     * @covers FamilyAdmin::configureListFields
     */
    public function testGetAll()
    {
        $this->_hotel->getAll();
        $this->assertTrue(true);
    }
    
    
}
