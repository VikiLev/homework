<?php

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