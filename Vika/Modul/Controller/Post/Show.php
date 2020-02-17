<?php

namespace Vika\Modul\Controller\Post;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;


class Show extends Action
{

    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}