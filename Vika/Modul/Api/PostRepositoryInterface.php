<?php

namespace Vika\Modul\Api;

use Vika\Modul\Api\Data\PostInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\SearchCriteriaInterface;
use Vika\Modul\Api\Data\PostSearchResultsInterface;


interface PostRepositoryInterface
{

    public function getById(int $id);
    public function deleteById(int $id);
    public function save(PostInterface $post): void ;
    public function getList(SearchCriteriaInterface $searchCriteria);
    public function delete(PostInterface $post);
}