<?php declare(strict_types=1);

require_once "Movie.php";

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Casino Glass", "Buena Vista International", "PG13"),
    new Movie("Casino Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
];

$moviesPG = Movie::getPG($movies);

echo "Movies with rating PG: " . PHP_EOL;
foreach ($moviesPG as $movie) {
    /** @var Movie $movie */
    $movie->getTitle();
}

