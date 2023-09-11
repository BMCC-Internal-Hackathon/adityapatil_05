<?php
// Simulated data for demonstration
$produceListings = [
    [
        'name' => 'Tomatoes',
        'quantity' => 50,
        'price' => 1.99,
    ],
    [
        'name' => 'Apples',
        'quantity' => 30,
        'price' => 0.79,
    ],
    [
        'name' => 'Bananas',
        'quantity' => 40,
        'price' => 0.49,
    ],
    [
        'name' => 'Carrots',
        'quantity' => 25,
        'price' => 0.89,
    ],
    [
        'name' => 'Strawberries',
        'quantity' => 20,
        'price' => 2.49,
    ],
    [
        'name' => 'Spinach',
        'quantity' => 15,
        'price' => 1.29,
    ],
    [
        'name' => 'Oranges',
        'quantity' => 35,
        'price' => 1.19,
    ],
    [
        'name' => 'Cucumbers',
        'quantity' => 30,
        'price' => 0.99,
    ],
    [
        'name' => 'Potatoes',
        'quantity' => 40,
        'price' => 1.49,
    ],
    [
        'name' => 'Onions',
        'quantity' => 25,
        'price' => 0.69,
    ],
    [
        'name' => 'Bell Peppers',
        'quantity' => 20,
        'price' => 1.99,
    ],
    [
        'name' => 'Lettuce',
        'quantity' => 30,
        'price' => 1.09,
    ],
    [
        'name' => 'Grapes',
        'quantity' => 25,
        'price' => 2.99,
    ],
];

// Send the produce listings as JSON response
header('Content-Type: application/json');
echo json_encode($produceListings);

?>
