<?php

use DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType;

class EndFixedPriceItemResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EndFixedPriceItemResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\AbstractResponseType', $this->obj);
    }
}
