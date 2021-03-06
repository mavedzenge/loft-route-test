<?php

namespace unit;

include './Service/LoftDigitalManager.php';

use Codeception\Test\Unit;

class LoftDigitalManagerTest extends Unit
{
    // tests
    public function testSortRouteArrayReturnExpectedOrder()
    {
        $json = '[
            {
            "from": "Porto International Airport, Portugal",
            "to": "Adolfo Suárez Madrid–Barajas Airport, Spain"
            },
            {
                "from": "Adolfo Suárez Madrid–Barajas Airport, Spain",
                "to": "London Heathrow, UK"
            },
            {
                "from": "London Heathrow, UK",
                "to": "Loft Digital, Loft, UK"
            },
            {
                "from": "São Paulo–Guarulhos International Airport, Brazil",
                "to": "Porto International Airport, Portugal"
            },
            {
                "from": "Fazenda São Francisco Citros, Brazil",
                "to": "São Paulo–Guarulhos International Airport, Brazil"
            }
        ]';

        $sortedArray = [];
        try {
            $sortedArray = sortRouteArray($json);
        } catch (\Exception $e) {

        }

        $expectedArray = [
            "Fazenda São Francisco Citros, Brazil",
            "São Paulo–Guarulhos International Airport, Brazil",
            "Porto International Airport, Portugal",
            "Adolfo Suárez Madrid–Barajas Airport, Spain",
            "London Heathrow, UK",
            "Loft Digital, Loft, UK",
        ];

        $this->assertIsArray($sortedArray);
        $this->assertSame($expectedArray, $sortedArray);
        $this->assertSame('Loft Digital, Loft, UK', $sortedArray[5]);
    }
}
