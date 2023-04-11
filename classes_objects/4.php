<?php declare(strict_types=1);

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {

        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;

    }

    public static function getPG(array $movies): array
    {
        $moviesPG = [];
        foreach ($movies as $movie) {
            if ($movie->rating === "PG") {
                $moviesPG[] = $movie;
            }
        }
        return $moviesPG;
    }

    public function getTitle(): void
    {
        echo "$this->title, the studio:  $this->studio" . PHP_EOL;
    }
}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Casino Glass", "Buena Vista International", "PG13"),
    new Movie("Casino Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
];

$moviesPG = Movie::getPG($movies);

echo "Movies with rating PG: " . PHP_EOL;
foreach ($moviesPG as $movie) {
    $movie->getTitle();
}

