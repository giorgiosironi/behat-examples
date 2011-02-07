<?php

$steps->Given('/^I have entered (\d+) into the unit price$/', function($world, $arg1) {
    $world->price->setUnitPrice($arg1);
});
$steps->Given('/^I have entered (\d+) into the vat percentage$/', function($world, $arg1) {
    $world->price->setVatPercentage($arg1);
});
$steps->Given('/^I make a behavior request$/', function($world) {
    $world->price->modifiedVat();
});
$steps->Given('/^The gross price should be (\d+)$/', function($world, $arg1) {
    assertEquals($arg1, $world->price->getGrossPrice());
});
