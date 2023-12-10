<?php
// $books = [

//   [
//     'name' => 'Do android dream of electric sheep',
//     'author' => 'Philip K. Dick',
//     'releaseYear' => 1968,
//     'purchaseUrl' => 'http://example.com'
//   ],

//   [
//     'name' => 'Project Hail Mary',
//     'author' => 'Andy Wair',
//     'releaseYear' => 2021,
//     'purchaseUrl' => 'http://example.com'
//   ],
//   [
//     'name' => 'The Martian',
//     'author' => 'Andy Wair',
//     'releaseYear' => 2011,
//     'purchaseUrl' => 'http://example.com'
//   ]

// ];

// function filter($items, $fn)
// {
//   $filterBooks = [];

//   foreach ($items as $item) {
//     if ($fn($item)) {
//       $filterBooks[] = $item;
//     }
//   }

//   return $filterBooks;
// }

// $filterr = filter($books, function ($book) {
//   return $book['releaseYear'] > 2000;
// });

// $filterr = array_filter($books, function ($book) {
//   return $book['releaseYear'] > 2000;
// });

$heading = 'Home';





require "views/index.view.php";
