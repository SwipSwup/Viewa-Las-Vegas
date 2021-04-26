<?php

require_once "vendor/autoload.php";
require_once "./src/Hotel.php";

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$hotels = [
    new Hotel(
        "Caesars Palace",
        "Arguably THE most famous of all of the hotels in Las Vegas, Caesars Palace is home to a 12,000 square metre casino and a host of celebrity owned restaurants.",
        "3570 S Las Vegas Blvd, Las Vegas, NV 89109, United States",
        "https://www.americanholidays.com/app/uploads/2017/02/most-famous-hotels-in-las-vegas-4.jpg"
    ),
    new Hotel(
        "MGM Grand",
        "Well known for housing Conor McGregor’s UFC bouts, the MGM grand has a prime location on the strip and is perfect for groups.",
        "3799 S Las Vegas Blvd, Las Vegas, NV 89109, United States",
        "https://www.americanholidays.com/app/uploads/2017/02/most-famous-hotels-in-las-vegas-1.jpg"
    ),
    new Hotel(
        "New York New York",
        "When it comes to eye-catching hotel engineering, New York New York has it nailed. For this reason, it makes my list of the most famous hotels in Las Vegas!",
        "3790 S Las Vegas Blvd, Las Vegas, NV 89109, United States",
        "https://www.americanholidays.com/app/uploads/2017/02/most-famous-hotels-in-las-vegas.jpg"
    ),
];

echo $twig->render(
    'hotels.html',
    ['hotels' => $hotels]
);
