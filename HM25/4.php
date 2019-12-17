<?php

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