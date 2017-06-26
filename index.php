<?php

include('./CombinationGenerator.php');
include('./PriceCalculator.php');
include('./LinkGenerator.php');

$combinationService = new CombinationGenerator();
$priceCalculator = new PriceCalculator();
$linkGenerator = new LinkGenerator($priceCalculator);

$data = [
    'processors' => [
        ['name' => 'i5-6500', 'prices' => [
            'amazon'          => 22139,
            'rue_du_commerce' => 22990,
            'top_achat'       => 21611,
            'cdiscount'       => 20999,
            'materiel_net'    => 22990,
            'ldlc'            => 23495
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Intel-Skylake-Processeur-i5-6500-BX80662I56500/dp/B010T6CWI2/ref=sr_1_1?ie=UTF8&qid=1498512411&sr=8-1&keywords=i5-6500',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/Processeur/Processeur-INTEL/INTEL/4943150-Core-i5-6500-3-2-ghz.htm#moid:MO-05AA0M57881698',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_wpr_puis_ref_est_in10090499.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/processeurs/intel-r-skylake-core-r-i5-6500/f-10764-bx80662i56500.html#mpos=2|cd',
            'materiel_net'    => 'http://www.materiel.net/processeur/intel-core-i5-6500-117233.html',
            'ldlc'            => 'http://www.ldlc.com/navigation/i5-6500/'
        ]],
        ['name' => 'i5-7400', 'prices' => [
            'amazon'          => 18500,
            'rue_du_commerce' => 20990,
            'top_achat'       => 20995,
            'cdiscount'       => 18386,
            'materiel_net'    => 21590,
            'ldlc'            => 21595
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Intel-Core-Kabylake-i5-7400-Processeur/dp/B01MSTDS3N/ref=sr_1_1?ie=UTF8&qid=1498503930&sr=8-1&keywords=i5-7400',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/Processeur/Processeur-INTEL/INTEL/4977131-Processeur-Intel-Core-i5-7400-3-00GHz-LGA1151-KABYLAKE.htm#moid:MO-79C75M66945166',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_wpr_puis_ref_est_in10101859.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/processeurs/intel-processeur-kaby-lake-core-i5-7400-3-0ghz/f-10764-bx80677i57400.html#mpos=10|cd',
            'materiel_net'    => 'http://www.materiel.net/processeur/intel-core-i5-7400-137573.html',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00221451.html'
        ]],
        ['name' => 'i5-7500', 'prices' => [
            'amazon'          => 20362,
            'rue_du_commerce' => 21490,
            'top_achat'       => 24431,
            'cdiscount'       => 21499,
            'materiel_net'    => 23990,
            'ldlc'            => 23995
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Intel-Core-Kabylake-i5-7500-Processeur/dp/B01MZZJ1P0/ref=sr_1_1?ie=UTF8&qid=1498513066&sr=8-1&keywords=i5-7500',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/Processeur/Processeur-INTEL/INTEL/4977132-Processeur-Intel-Core-i5-7500-3-40GHz-LGA1151-KABYLAKE.htm#moid:MO-49A1BM66945094',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_wpr_puis_ref_est_in10101860.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/processeurs/intel-processeur-kaby-lake-core-i5-7500-3-4ghz/f-10764-bx80677i57500.html#mpos=4|cd',
            'materiel_net'    => 'http://www.materiel.net/processeur/intel-core-i5-7500-137572.html',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00221453.html'
        ]],
        ['name' => 'i5-7600', 'prices' => [
            'amazon'          => 20999,
            'rue_du_commerce' => 25960,
            'top_achat'       => 22551,
            'cdiscount'       => 21999,
            'materiel_net'    => 26490,
            'ldlc'            => 25995
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Intel-Core-Kabylake-i5-7600-Processeur/dp/B01LTI1JDS/ref=sr_1_1?ie=UTF8&qid=1498513299&sr=8-1&keywords=i5-7600',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/Processeur/Processeur-INTEL/INTEL/4977133-Processeur-Intel-Core-i5-7600-3-50GHz-LGA1151-KABYLAKE.htm#moid:MO-49A1BM66945096',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_wpr_puis_ref_est_in10101861.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/processeurs/intel-processeur-kaby-lake-core-i5-7600-3-5ghz/f-10764-bx80677i57600.html#mpos=2|cd',
            'materiel_net'    => 'http://www.materiel.net/processeur/intel-core-i5-7600-137574.html',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00221455.html'
        ]],
    ],
    'mobos' => [
        ['name' => 'MSI B250I Gaming Pro AC (1151)', 'prices' => [
            'amazon'          => 9999,
            'rue_du_commerce' => 11890,
            'top_achat'       => 11177,
            'cdiscount'       => 10999,
            'materiel_net'    => 11899,
            'ldlc'            => 12395
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/MSI-B250I-GAMING-AC-Socket/dp/B01MZ6B7EH/ref=sr_1_1?ie=UTF8&qid=1498513461&sr=8-1&keywords=MSI+B250I+Gaming+Pro+AC',
            'rue_du_commerce' => 'https://www.rueducommerce.fr/recherche/msi-b250i-gaming-pro-ac',
            'top_achat'       => 'https://www.topachat.com/pages/recherche.php?cat=accueil&etou=0&mc=MSI+B250I+Gaming+Pro+AC',
            'cdiscount'       => 'http://www.cdiscount.com/search/10/msi+b250i+gaming+pro+ac.html#_his_',
            'materiel_net'    => 'http://www.materiel.net/achat/msi-b250i-gaming-pro-ac/',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00221567.html'
        ]],
    ],
    'ssd' => [
        ['name' => 'Samsung 850 Evo (256Go)', 'prices' => [
            'amazon'          => 9569,
            'rue_du_commerce' => 15000,
            'top_achat'       => 10331,
            'cdiscount'       => 9644,
            'materiel_net'    => 10990,
            'ldlc'            => 9995
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Samsung-MZ-75E250B-EU-Disque-interne/dp/B00P736UEU/ref=sr_1_1?ie=UTF8&qid=1498514815&sr=8-1&keywords=Samsung+850+Evo',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/SSD/SSD-Interne/SAMSUNG/4930541-850-EVO-250-Go.htm#moid:MO-041D6M44278976',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_w_ssd_puis_ref_est_in10084686.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/ssd/samsung-250go-ssd-2-5-850-evo-mz-75e250b-eu/f-10703-mz75e250beu.html#mpos=1|cd',
            'materiel_net'    => 'http://www.materiel.net/ssd/samsung-serie-850-evo-250-go-110457.html',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00180177.html'
        ]],
    ],
    'hdd' => [
        ['name' => 'WD Blue 2To', 'prices' => [
            'amazon'          => 7200,
            'rue_du_commerce' => 10400,
            'top_achat'       => 6937,
            'cdiscount'       => 7199,
            'materiel_net'    => 7990,
            'ldlc'            => 8596
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Western-Digital-WD20EZRZ-Disque-Interne/dp/B013QFRS2S/ref=sr_1_1?ie=UTF8&qid=1498514924&sr=8-1&keywords=WD+Blue+2To',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/Disque-Dur-interne/Disque-Dur-interne-3-5/WESTERN-DIGITAL/4947887-WD-Blue-3-To.htm#moid:MO-DFD8EM59162914',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_wdi_sata_puis_ref_est_in10092718.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/disques-durs-internes/wd-blue-2to-64mo-3-5-wd20ezrz/f-10768-wd20ezrz.html#mpos=1|cd',
            'materiel_net'    => 'http://www.materiel.net/disque-dur-interne-3-5-pouces/western-digital-wd-blue-3-5-sata-iii-6-gb-s-2-to-122350.html',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00199916.html'
        ]],
    ],
    'cases' => [
        ['name' => 'Corsair Graphite 380T', 'prices' => [
            'amazon'          => 20000,
            'rue_du_commerce' => 20000,
            'top_achat'       => 20000,
            'cdiscount'       => 20000,
            'materiel_net'    => 20000,
            'ldlc'            => 15327,
        ], 'links' => [
            'amazon'          => null,
            'rue_du_commerce' => null,
            'top_achat'       => null,
            'cdiscount'       => null,
            'materiel_net'    => null,
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00174406.html'
        ]],
    ],
    'ram' => [
        ['name' => 'DDR4 Corsair Vengeance 16Go', 'prices' => [
            'amazon'          => 14589,
            'rue_du_commerce' => 14780,
            'top_achat'       => 13893,
            'cdiscount'       => 16499,
            'materiel_net'    => 14690,
            'ldlc'            => 15035,
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Corsair-CMK16GX4M2A2400C14-Vengeance-ordinateur-performance/dp/B00S51XHUQ/ref=sr_1_3?ie=UTF8&qid=1498515277&sr=8-3&keywords=DDR4+Corsair+Vengeance+16Go',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/Memoire-PC/Memoire-DDR4/CORSAIR/4942073-Vengeance-LPX-Black-16-Go-2-x-8-Go-DDR4-2400-MHz-Cas-14.htm#moid:MO-19DE7M55308328',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_wme_ddr4_puis_ref_est_in10089924.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/memoire-ram/corsair-vengeance-rgb-series-ddr4-3000-cl15-16/f-10716-cor0843591097192.html#mpos=19|cd',
            'materiel_net'    => 'http://www.materiel.net/barrette-memoire-pour-pc/corsair-vengeance-lpx-black-ddr4-2-x-8-go-2133-mhz-cas-13-121273.html',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00181563.html'
        ]],
    ],
    'psu' => [
        ['name' => 'Corsair CX500', 'prices' => [
            'amazon'          => 5490,
            'rue_du_commerce' => 6980,
            'top_achat'       => 6571,
            'cdiscount'       => 6134,
            'materiel_net'    => 6990,
            'ldlc'            => 6995
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/Corsair-CP-9020047-EU-Builder-Bronze-Alimentation/dp/B009D79N3G/ref=sr_1_1?ie=UTF8&qid=1498515630&sr=8-1&keywords=Corsair+CX500',
            'rue_du_commerce' => 'http://www.rueducommerce.fr/Composants/Alimentation-PC/Alimentation-non-modulaire/CORSAIR/4879201-Alimentation-PC-CX-Bronze-CP-9020047-EU-80-Bronze-500W.htm#moid:MO-31C66M22450650',
            'top_achat'       => 'https://www.topachat.com/pages/detail2_cat_est_micro_puis_rubrique_est_w_ali_puis_ref_est_in10064201.html',
            'cdiscount'       => 'http://www.cdiscount.com/informatique/alimentation-pc/corsair-alimentation-pc-cx500-v2-series-500w/f-10775-cp9020047eu.html?idOffre=3064005#mpos=1|mp',
            'materiel_net'    => 'http://www.materiel.net/alimentation-pc/corsair-cx-bronze-500w-82684.html',
            'ldlc'            => 'http://www.ldlc.com/fiche/PB00136131.html'
        ]],
    ],
    'dvd' => [
        ['name' => 'Lecteur DVD Externe USB 3.0 Graveur FJOY Ultra Slim', 'prices' => [
            'amazon'          => 2399,
            'rue_du_commerce' => 3598,
            'top_achat'       => 5000,
            'cdiscount'       => 4000,
            'materiel_net'    => 3490,
            'ldlc'            => 3990
        ], 'links' => [
            'amazon'          => 'https://www.amazon.fr/gp/product/B06XHH47VP/ref=s9_acsd_top_hd_bw_bT7xZP_c_x_2_w?pf_rd_m=A1X6FK5RDHNB96&pf_rd_s=merchandised-search-3&pf_rd_r=GPH2VY8FQ7MY9J87WZ3J&pf_rd_t=101&pf_rd_p=9f3a906a-3021-506f-9913-f5084c229985&pf_rd_i=430411031',
            'rue_du_commerce' => null,
            'top_achat'       => null,
            'cdiscount'       => null,
            'materiel_net'    => null,
            'ldlc'            => null
        ]],
    ],
];

$combinations = $combinationService->generate($data);

$lowestPrice = null;
$lowestIndex = array_reduce(array_keys($combinations), function ($agg, $comboKey) use ($priceCalculator, $combinations, &$lowestPrice) {
    $price = $priceCalculator->totalPrice($combinations[$comboKey]);

    if (! $lowestPrice || $price < $lowestPrice) {
        $lowestPrice = $price;
        $agg = $comboKey;
    }

    return $agg;
}, -1);

$highestPrice = null;
$highestIndex = array_reduce(array_keys($combinations), function ($agg, $comboKey) use ($priceCalculator, $combinations, &$highestPrice) {
    $price = $priceCalculator->totalPrice($combinations[$comboKey]);

    if (! $highestPrice || $price > $highestPrice) {
        $highestPrice = $price;
        $agg = $comboKey;
    }

    return $agg;
}, -1);
?>
<!doctype html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Price Calculator</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="thead-default">
                            <tr>
                                <?php foreach(array_keys($data) as $name) { ?>
                                    <th><?php echo $name; ?></th>
                                <?php } ?>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($combinations as $comboKey => $combo) { ?>
                                <?php if($comboKey == $lowestIndex) { ?>
                                    <tr class="table-success">
                                <?php } elseif($comboKey == $highestIndex) { ?>
                                    <tr class="table-danger">
                                <?php } else { ?>
                                    <tr>
                                <?php } ?>
                                    <?php foreach($combo as $elem) { ?>
                                        <td>
                                            <?php echo $elem['name']; ?>
                                            <?php echo $linkGenerator->productLink($elem); ?>
                                        </td>
                                    <?php } ?>
                                    <td><?php echo round($priceCalculator->totalPrice($combo), 2); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
