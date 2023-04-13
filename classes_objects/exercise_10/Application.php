<?php declare(strict_types=1);

class Application
{
    private VideoStore $videoStore;

    public function __construct()
    {
        $this->videoStore = new VideoStore();
    }

    public function run(): void
    {

        $this->videoStore->addVideo("The Matrix");
        $this->videoStore->addVideo("Godfather II");
        $this->videoStore->addVideo("Star Wars Episode IV: A New Hope");
        $this->videoStore->receiveRating("The Matrix", 4);
        $this->videoStore->receiveRating("The Matrix", 5);
        $this->videoStore->receiveRating("Godfather II", 4);
        $this->videoStore->receiveRating("Godfather II", 3);
        $this->videoStore->receiveRating("Star Wars Episode IV: A New Hope", 5);
        $this->videoStore->receiveRating("Star Wars Episode IV: A New Hope", 5);
        $this->videoStore->checkOutVideo("Godfather II");


        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to rate a video\n";
            echo "Choose 5 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $title = readline("Enter video title: ");
                    $this->videoStore->addVideo($title);
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    echo "Video - $title - has been added to the inventory" . PHP_EOL;
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    break;
                case 2:
                    $title = readline("Enter video title for rent: ");
                    $this->videoStore->checkOutVideo($title);
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    echo "Video - $title - has been rented" . PHP_EOL;
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    break;
                case 3:
                    $title = readline("Enter video title for return: ");
                    $this->videoStore->checkInVideo($title);
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    echo "Video - $title - has been returned" . PHP_EOL;
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    break;
                case 4:
                    $title = readline("Enter video title to rate: ");
                    $rating = (int)readline("Enter your rating (1-5): ");
                    $this->videoStore->receiveRating($title, $rating);
                    break;
                case 5:
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    echo "Inventory: " . PHP_EOL;
                    $this->videoStore->listInventory();
                    break;
                default:
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
                    echo "Sorry, I don't understand you..";
                    echo "----------------------------------------------------------------------------------" . PHP_EOL;
            }
        }
    }
}
