<?php

use DTS\eBaySDK\MerchantData\Enums\SellereBayPaymentProcessStatusCodeType;

class SellereBayPaymentProcessStatusCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SellereBayPaymentProcessStatusCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\SellereBayPaymentProcessStatusCodeType', $this->obj);
    }
}
