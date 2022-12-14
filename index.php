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

    function get_info() {
        if($this->title === 'Inception') {
            return 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.';
        } elseif($this->title === 'The Social Network') {
            return 'Pochi anni dopo aver creato Facebook nella sua stanza del dormitorio di Harvard, Mark Zuckerberg è diventato un miliardario, ma il suo grande successo sta portando a problemi sia personali sia legali.';
        } elseif($this->title === 'The Wolf of Wall Street') {
            return 'New York, anni 80. Eccessi e corruzione segnano la curva discendente della brillante carriera di Jordan Belfort, un ambizioso broker in grado di guadagnare migliaia di dollari al minuto e di spenderne altrettanti in droga e futilità.';
        } else {
            return '';
        }
    }
} 

$inception = new Movie('Inception', 'Christopher Nolan', '2010', '2h 28m', "https://m.media-amazon.com/images/I/91Rc8cAmnAL._AC_SY679_.jpg");
$network = new Movie('The Social Network', 'David Fincher', '2010', '2h', "https://www.ninjamarketing.it/wp-content/uploads/2010/06/the-social-network-poster-640.jpg");
$wolf = new Movie('The Wolf of Wall Street', 'Martin Scorsese', '2014', '3h', "http://ae01.alicdn.com/kf/HTB1BMGTfzlxYKJjSZFuq6yYlVXa1.jpg_.webp");
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
            <div><?php echo $inception->year ?></h2> - <?php echo $inception->length ?></h2></div>
            <h4><?php echo $inception->director ?></h2></h4>
            <p><?php echo $inception->get_info() ?></p>
        </div>
        <div class="film">
            <img src="<?php echo $network->image ?>" alt="<?php echo $network->title ?> <?php $network->poster() ?>">
            <h2><?php echo $network->title ?></h2>
            <div><?php echo $network->year ?></h2> - <?php echo $network->length ?></h2></div>
            <h4><?php echo $network->director ?></h2></h4>
            <p><?php echo $network->get_info() ?></p>
        </div>
        <div class="film">
            <img src="<?php echo $wolf->image ?>" alt="<?php echo $wolf->title ?> <?php $wolf->poster() ?>">
            <h2><?php echo $wolf->title ?></h2>
            <div><?php echo $wolf->year ?></h2> - <?php echo $wolf->length ?></h2></div>
            <h4><?php echo $wolf->director ?></h2></h4>
            <p><?php echo $wolf->get_info() ?></p>
        </div>
    </div>
    </div>
</body>
</html>