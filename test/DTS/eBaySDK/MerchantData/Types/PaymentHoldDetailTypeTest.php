<?php

use DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType;

class PaymentHoldDetailTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentHoldDetailType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\PaymentHoldDetailType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
