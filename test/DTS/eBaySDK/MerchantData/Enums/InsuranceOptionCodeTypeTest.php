<?php

use DTS\eBaySDK\MerchantData\Enums\InsuranceOptionCodeType;

class InsuranceOptionCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InsuranceOptionCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\InsuranceOptionCodeType', $this->obj);
    }
}
