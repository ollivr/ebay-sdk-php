<?php

use DTS\eBaySDK\MerchantData\Enums\ReturnStatusCodeType;

class ReturnStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\ReturnStatusCodeType', $this->obj);
    }
}
