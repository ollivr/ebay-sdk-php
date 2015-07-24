<?php

use DTS\eBaySDK\MerchantData\Enums\PictureSetCodeType;

class PictureSetCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PictureSetCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\PictureSetCodeType', $this->obj);
    }
}
