<?php

$steps->Given('/^I have entered (\d+) into the unit price$/', function($world, $unitPrice) {
    $world->price->setUnitPrice($unitPrice);
});
$steps->Given('/^I have entered (\d+) into the vat percentage$/', function($world, $vatPercentage) {
    $world->price->setVatPercentage($vatPercentage);
});
$steps->When('/^I make a behavior request$/', function($world) {
    $world->price->modifiedVat();
});
$steps->Then('/^The gross price should be (\d+)$/', function($world, $expectedGrossPrice) {
    assertEquals($expectedGrossPrice, $world->price->getGrossPrice());
});
