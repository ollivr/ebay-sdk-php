<?php

use DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType;

class ClassifiedAdPhoneCountDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ClassifiedAdPhoneCountDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\ClassifiedAdPhoneCountDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
