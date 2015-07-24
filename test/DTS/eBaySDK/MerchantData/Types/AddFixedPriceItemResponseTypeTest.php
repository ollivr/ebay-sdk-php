<?php

use DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType;

class AddFixedPriceItemResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddFixedPriceItemResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AbstractResponseType', $this->obj);
    }
}
