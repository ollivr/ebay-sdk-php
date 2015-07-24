<?php

use DTS\eBaySDK\ResolutionCaseManagement\Types\EnumerationDetailType;

class EnumerationDetailTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EnumerationDetailType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\EnumerationDetailType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
