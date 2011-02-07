<?php
//require_once...

function assertEquals($expected, $actual)
{
    if ($expected != $actual) {
        throw new Exception("$expected is not equal to $actual.");
    }
}

class Price
{
    function setUnitPrice($price) { $this->unit_price = $price; }
    function setVatPercentage($vat_percentage) { $this->vat_percentage = $vat_percentage; }
    function modifiedVat() {
        $this->gross_price = $this->unit_price * (1 + $this->vat_percentage / 100);
    }
    function getGrossPrice() { return $this->gross_price; }
}

$world->price = new Price();
