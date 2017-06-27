<?php

require_once './vendor/autoload.php';

include('./CombinationGenerator.php');
include('./PriceCalculator.php');
include('./LinkGenerator.php');

$combinationService = new CombinationGenerator();
$priceCalculator = new PriceCalculator();
$linkGenerator = new LinkGenerator($priceCalculator);

$pricesheets = [
    'Standard Prices' => include('./data/pricesheet.php'),
    'Sale Prices' => include('./data/sale.php')
];

$combinations = array_reduce(array_keys($pricesheets), function ($agg, $key) use ($combinationService, $pricesheets) {
    $data = $pricesheets[$key];
    $agg[] = $combinationService->generate($data);

    return $agg;
}, []);

$lowestPrice = 100;
$lowestIndex = 1;

$highestPrice = 200;
$highestIndex = 2;

$lowestPrices = [];
$lowestIndexes = array_reduce($combinations, function ($agg, $combinationList) use (&$lowestPrices, $priceCalculator) {
    $lowestPrice = null;

    $agg[] = array_reduce(array_keys($combinationList), function ($comboAgg, $comboKey) use ($priceCalculator, $combinationList, &$lowestPrice) {
        $price = $priceCalculator->totalPrice($combinationList[$comboKey]);

        if (! $lowestPrice || $price < $lowestPrice) {
            $lowestPrice = $price;
            $comboAgg = $comboKey;
        }

        return $comboAgg;
    }, -1);

    $lowestPrices[] = $lowestPrice;

    return $agg;
}, []);

$highestPrices = [];
$highestIndexes = array_reduce($combinations, function ($agg, $combinationList) use (&$highestPrices, $priceCalculator) {
    $highestPrice = null;

    $agg[] = array_reduce(array_keys($combinationList), function ($comboAgg, $comboKey) use ($priceCalculator, $combinationList, &$highestPrice) {
        $price = $priceCalculator->totalPrice($combinationList[$comboKey]);

        if (! $highestPrice || $price > $highestPrice) {
            $lowestPrice = $price;
            $comboAgg = $comboKey;
        }

        return $comboAgg;
    }, -1);

    $highestPrices[] = $highestPrice;

    return $agg;
}, []);

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, [
    'debug' => false,
]);
$twig->addExtension(new Twig_Extension_Debug());

echo $twig->render('master.html', compact(
    'pricesheets',
    'combinations',
    'lowestIndexes',
    'highestIndexes',
    'linkGenerator',
    'priceCalculator'
));
