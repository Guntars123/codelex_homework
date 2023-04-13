<?php declare(strict_types=1);

class Video
{
    private string $title;
    private string $flag = "In stock";
    private int $ratingSum = 0;
    private int $ratingCount = 0;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function rentVideo(): void
    {
        $this->flag = "Not in stock";
    }

    public function returnVideo(): void
    {
        $this->flag = "In stock";
    }

    public function setRating(int $rating): void
    {
        if ($rating < 1 || $rating > 5) {
            echo "Invalid rating (rating should be 1-5) " . PHP_EOL;
        } else {
            $this->ratingSum += $rating;
            $this->ratingCount++;
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAverageRating(): float
    {
        if ($this->ratingCount == 0) {
            return 0;
        }
        return $this->ratingSum / $this->ratingCount;
    }

    public function getVideoFlag(): string
    {
        return $this->flag;
    }
}

