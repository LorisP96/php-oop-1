<?php
class Movie {
    public $title;
    public $director;
    public $year;
    public $length;
    public $image;

    function __construct($_title, $_director, $_year, $_length, $_image) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->length = $_length;
        $this->image = $_image;
    }

    function poster() {
        echo 'poster';
    }
} 

$inception = new Movie('Inception', 'Christopher Nolan', '2010', '2h 28m', "https://m.media-amazon.com/images/I/91Rc8cAmnAL._AC_SY679_.jpg");
$network = new Movie('The Social Network', 'David Fincher', '2010', '2h', "https://www.ninjamarketing.it/wp-content/uploads/2010/06/the-social-network-poster-640.jpg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="film">
            <img src="<?php echo $inception->image ?>" alt="<?php echo $inception->title ?> <?php $inception->poster() ?>">
            <h2><?php echo $inception->title ?></h2>
            <div><?php echo $inception->year ?></h2> , <?php echo $inception->length ?></h2></div>
            <h4><?php echo $inception->director ?></h2></h4>
        </div>
        <div class="film">
            <img src="<?php echo $network->image ?>" alt="<?php echo $network->title ?> <?php $network->poster() ?>">
            <h2><?php echo $network->title ?></h2>
            <div><?php echo $network->year ?></h2> , <?php echo $network->length ?></h2></div>
            <h4><?php echo $network->director ?></h2></h4>
        </div>
    </div>
    </div>
</body>
</html>