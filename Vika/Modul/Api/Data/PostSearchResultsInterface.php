<?php

namespace Vika\Modul\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;


interface PostSearchResultsInterface extends SearchResultsInterface
{

    public function getItems();


    public function setItems(array $items);
}
