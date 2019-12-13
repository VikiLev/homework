    
        
       <?php


    interface  office_tools
    {
        public function office_tools();
    }


    abstract class Stationery implements office_tools
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
        public function office_tools()
        {
           echo 'New Pen added.' . PHP_EOL;
        }

        public function newStationery()
        {
            return 'It is ' . $this->name .  ',color is - '
                . $this->color . PHP_EOL;
        }

    }

    class pensil extends Stationery
    {
        public function office_tools()
        {
            echo 'New pensil added.' . PHP_EOL;
        }
        public function newStationery()
        {
            return 'It is ' . $this->name .  ',color is - '
                . $this->color . PHP_EOL;
        }

    }


    $pen = new pen('pen', 'blue');
    $pensil = new pensil('pensil', 'gray');


    echo $pen->office_tools() . $pen->newStationery();
    echo $pensil->office_tools() . $pensil->newStationery();

    
