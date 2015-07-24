<?php

use DTS\eBaySDK\MerchantData\Enums\MeasurementSystemCodeType;

class MeasurementSystemCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MeasurementSystemCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\MeasurementSystemCodeType', $this->obj);
    }
}
