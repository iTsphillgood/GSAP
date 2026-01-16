<?php
/**
 * Mock Database for Kihlströms NextGen POC
 * Simulates a WordPress database query for inventory
 */

function kihlstroms_get_inventory() {
    return [
        [
            'id' => 1,
            'make' => 'Isuzu',
            'model' => 'D-Max XRX',
            'year' => 2025,
            'price' => 499900, // SEK ex moms
            'price_currency' => 'SEK',
            'body_type' => 'Pickup',
            'fuel_type' => 'Diesel/HVO100',
            'transmission' => 'Automatic',
            'drive_wheel' => '4WD',
            'color' => 'Volcanic Amber',
            'mileage' => 0,
            'description' => 'Pickupernas Konung. 3.5 ton dragvikt, läderklädsel, ADAS-säkerhetssystem.',
            'image' => 'assets/images/dmax-xrx.jpg',
            'specs' => [
                'payload' => '1000 kg',
                'towing' => '3500 kg',
                'volume' => 'N/A'
            ],
            'tags' => ['entreprenad', 'skog', 'jakt', '4x4']
        ],
        [
            'id' => 2,
            'make' => 'Iveco',
            'model' => 'Daily Van 12m3',
            'year' => 2025,
            'price' => 449000,
            'price_currency' => 'SEK',
            'body_type' => 'Van',
            'fuel_type' => 'Diesel/HVO100',
            'transmission' => 'Hi-Matic 8-speed',
            'drive_wheel' => 'RWD',
            'color' => 'Polar White',
            'mileage' => 0,
            'description' => 'Smidigast i stan. 12m3 lastvolym, marknadens bästa vändradie.',
            'image' => 'assets/images/daily-van.jpg',
            'specs' => [
                'payload' => '1430 kg',
                'towing' => '3500 kg',
                'volume' => '12 m3'
            ],
            'tags' => ['bud', 'city', 'logistik', 'service']
        ],
        [
            'id' => 3,
            'make' => 'Iveco',
            'model' => 'Daily Fastlane (Skåp+Lift)',
            'year' => 2025,
            'price' => 589000,
            'price_currency' => 'SEK',
            'body_type' => 'Box Truck',
            'fuel_type' => 'Diesel',
            'transmission' => 'Hi-Matic 8-speed',
            'drive_wheel' => 'RWD',
            'color' => 'Polar White',
            'mileage' => 0,
            'description' => 'Ready-to-run. Färdigbyggt skåp med 750kg bakgavellyft. Leverans direkt.',
            'image' => 'assets/images/daily-fastlane.jpg',
            'specs' => [
                'payload' => '1100 kg',
                'towing' => '3500 kg',
                'volume' => '18 m3'
            ],
            'tags' => ['flytt', 'distribution', 'heavy', 'fastlane']
        ]
    ];
}
