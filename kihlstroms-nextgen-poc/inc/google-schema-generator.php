<?php
/**
 * Google Vehicle Listing Schema Generator
 * Outputs JSON-LD for Google Merchant Center & Vehicle Ads
 */

class Kihlströms_Google_Schema {

    public static function generate_json_ld($vehicle) {
        $schema = [
            '@context' => 'https://schema.org/',
            '@type' => 'Vehicle',
            'name' => $vehicle['make'] . ' ' . $vehicle['model'],
            'image' => 'https://www.kihlstroms.se/' . $vehicle['image'],
            'brand' => [
                '@type' => 'Brand',
                'name' => $vehicle['make']
            ],
            'model' => $vehicle['model'],
            'vehicleModelDate' => $vehicle['year'],
            'fuelType' => $vehicle['fuel_type'],
            'vehicleTransmission' => $vehicle['transmission'],
            'driveWheelConfiguration' => $vehicle['drive_wheel'],
            'bodyType' => $vehicle['body_type'],
            'mileageFromOdometer' => [
                '@type' => 'QuantitativeValue',
                'value' => $vehicle['mileage'],
                'unitCode' => 'KMT'
            ],
            'offers' => [
                '@type' => 'Offer',
                'price' => $vehicle['price'],
                'priceCurrency' => $vehicle['price_currency'],
                'availability' => 'https://schema.org/InStock',
                'itemCondition' => 'https://schema.org/NewCondition',
                'seller' => [
                    '@type' => 'AutoDealer',
                    'name' => 'Kihlströms Transport & Lastbilscenter',
                    'image' => 'https://www.kihlstroms.se/logo.png',
                    'telephone' => '+46-8-195626',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => 'Smista Allé 19',
                        'addressLocality' => 'Segeltorp',
                        'postalCode' => '141 72',
                        'addressCountry' => 'SE'
                    ]
                ]
            ],
            'vehicleConfiguration' => implode(', ', $vehicle['tags'])
        ];

        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}
