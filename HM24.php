    <?php


    interface Canwrite
    {
        public function canwrite();
    }


    abstract class Stationery implements Canwrite
    {
        public $name;
        public $color;
        
        

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
            
        }
    }

    class Pen extends Stationery
    {
        public function Canwrite()
        {
           echo 'New Pen added.' . PHP_EOL;
        }

        public function newStationery()
        {
            return 'It is ' . $this->name .  ',color is - '
                . $this->color . PHP_EOL;
        }

    }

    class feather extends Pen
    {
        public function Canwrite()
        {
            echo 'New feather added.' . PHP_EOL;
        }
    }

    class pensil extends Pen
    {
        public function Canwrite()
        {
            echo 'New pensil added.' . PHP_EOL;
        }
    }

    $pen = new pen('pen', 'blue');
    $feather = new feather('feather','black');
    $pensil = new pensil('pensil', 'gray');


    echo $pen->canwrite() . $pen->newStationery();
    echo $pensil->canwrite() . $pensil->newStationery();
    echo $feather->canwrite() . $feather->newStationery();
