#!/usr/bin/php -q
<?php

include './Service/LoftDigitalManager.php';

    $json = '[
        {
            "from": "Adolfo Suárez Madrid–Barajas Airport, Spain",
            "to": "London Heathrow, UK"
        },
        {
            "from": "Fazenda São Francisco Citros, Brazil",
            "to": "São Paulo–Guarulhos International Airport, Brazil"
        },
        {
            "from": "London Heathrow, UK",
            "to": "Loft Digital, Loft, UK"
        },
        {
            "from": "Porto International Airport, Portugal",
            "to": "Adolfo Suárez Madrid–Barajas Airport, Spain"
        },
        {
            "from": "São Paulo–Guarulhos International Airport, Brazil",
            "to": "Porto International Airport, Portugal"
        }
        ]';

print('=== Loft Digital Banana Delivery ===' . PHP_EOL);

print('=== Sorting Delivery Route ===' . PHP_EOL);


try {
    if ($sortedArray = sortRouteArray($json)) {

        print('=== Printing out Sorted Route ===' . PHP_EOL);

        print_r($sortedArray);

        print('=== Route sorting was successful ===' . PHP_EOL);
    } else {
        print('Failed to successfully sort delivery route ===' . PHP_EOL);
    }
} catch (Exception $e) {
    echo 'Caught Exception' . $e;
}
