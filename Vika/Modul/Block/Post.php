<?php

namespace Vika\Modul\Block;

use Vika\Modul\Api\PostRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;


class Post extends Template
{
    private $postRepository;
    private $searchCriteriaBuilder;

    public function __construct(
        Context $context,
        PostRepositoryInterface $postRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->postRepository = $postRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    public function getPost()
    {
        $searchCriteria = $this->searchCriteriaBuilder->create();

        $searchResult = $this->postRepository->getList($searchCriteria);

        return $searchResult;
    }
}