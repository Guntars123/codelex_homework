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
            /** @var Movie $movie */
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
