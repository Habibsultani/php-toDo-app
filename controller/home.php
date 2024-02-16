<?php

//$books = [
//    [
//        'name' => 'HABIB SULTANI',
//        'bornPlace' => 'MAIDAN WARDAK',
//        'university' => 'ONDOKUZ MAYIS UNIVERSITY',
//        'age' => 19
//    ],
//    [
//        'name' => 'AHMAD RASHID',
//        'bornPlace' => 'HERAT BASTAN',
//        'university' => 'SAMSUN UNIVERSITY',
//        "age" => 18
//    ],
//    [
//        'name' => 'ABDI',
//        'bornPlace' => 'KENYA',
//        'university' => 'ODTTO UNIVERSITY',
//        'age' => 17
//    ]
//];
//
//$yourName = 'habib';
//$habib = 'You are Habib SUltani';
//
//
//function filterMame($items, $fn)
//{
//
//    $filteredItems = [];
//
//    foreach ($items as $item) {
//        if ($fn($item)) {
//            $filteredItems[] = $item;
//        }
//    }
//
//    return $filteredItems;
//}
//
//$filteredByName = array_filter($books, function ($book) {
//    return $book['age'] >= 18;
//});

$heading = 'Home page';




require 'views/home.view.php';