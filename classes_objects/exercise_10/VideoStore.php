<?php declare(strict_types=1);

class VideoStore
{
    private array $inventory;

    public function addVideo(string $title): void
    {
        $this->inventory[] = new Video($title);
    }

    public function getVideo(string $title): ?Video
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() == $title) {
                return $video;
            }
        }
        return null;
    }

    public function checkOutVideo(string $title): void
    {
        $video = $this->getVideo($title);
        if ($video == null) {
            echo "There is no such video" . PHP_EOL;
            exit;
        }
        $video->rentVideo();
    }

    public function checkInVideo(string $title): void
    {
        $video = $this->getVideo($title);
        if ($video == null) {
            echo "There is no such video" . PHP_EOL;
            exit;
        }
        $video->returnVideo();

    }

    public function receiveRating(string $title, int $rating): void
    {
        $video = $this->getVideo($title);
        if ($video == null) {
            echo "There is no such video" . PHP_EOL;
            exit;
        }
        $video->setRating($rating);
    }

    public function listInventory(): void
    {
        foreach ($this->inventory as $video) {
            /** @var Video $video */
            echo "Title: " . $video->getTitle() . "/ Rating: " . $video->getAverageRating() .
                "/ Status: " . $video->getVideoFlag() . PHP_EOL;
            echo "----------------------------------------------------------------------------------" . PHP_EOL;
        }
    }
}
