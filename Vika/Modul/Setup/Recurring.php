<?php

namespace Vika\Modul\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Psr\Log\LoggerInterface;


class Recurring implements InstallSchemaInterface
{

    private $logger;


    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->logger->info(sprintf("%s is called", self::class));
    }
}
