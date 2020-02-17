<?php

namespace Vika\Modul\Setup;

use Magento\Framework\DB\TransactionFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Psr\Log\LoggerInterface;
use Vika\Modul\Api\Data\PostInterfaceFactory;

class InstallData implements InstallDataInterface
{

    private $postFactory;

    private $transactionFactory;

    private $logger;

    public function __construct(
        PostInterfaceFactory $postFactory,
        TransactionFactory $transactionFactory,
        LoggerInterface $logger
    ) {
        $this->postFactory = $postFactory;
        $this->transactionFactory = $transactionFactory;
        $this->logger = $logger;
    }


    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $transactionModel = $this->transactionFactory->create();
        
            $post = $this->postFactory->create();
            $post->setName('Vika');
            $post->setEmail('@mail.com');
            $post->setSex('woman');



            $transactionModel->addObject($post);


        try {
            $transactionModel->save();
        } catch ( \Exception $exception) {
            $this->logger->critical($exception->getMessage());
        }
    }
}