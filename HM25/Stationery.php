<?php

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