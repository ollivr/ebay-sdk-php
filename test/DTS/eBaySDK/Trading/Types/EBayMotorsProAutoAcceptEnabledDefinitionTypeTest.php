<?php

use DTS\eBaySDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType;

class EBayMotorsProAutoAcceptEnabledDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EBayMotorsProAutoAcceptEnabledDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\EBayMotorsProAutoAcceptEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
