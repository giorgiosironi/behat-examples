<?php
// here you could put require_once() statements, or include some bootstrap file

/**
 * I define a simple assertion function here. However, it should be in another file.
 * You can also import PHPUnit's assertions: everything that throws exceptions when the assertion fails will work.
 */
function assertEquals($expected, $actual)
{
    if ($expected != $actual) {
        throw new Exception("$expected is not equal to $actual.");
    }
}

/**
 * Also the class definition should be in its own file: this file will
 * be repeatedly executed.
 */
class Price
{
    function setUnitPrice($price)
    {
        $this->unit_price = $price;
    }

    function setVatPercentage($vat_percentage)
    {
        $this->vat_percentage = $vat_percentage;
    }

    function modifiedVat()
    {
        $this->gross_price = $this->unit_price * (1 + $this->vat_percentage / 100);
    }

    function getGrossPrice()
    {
        return $this->gross_price;
    }
}

/**
 * The fixture for our tests.
 */
$world->price = new Price();
