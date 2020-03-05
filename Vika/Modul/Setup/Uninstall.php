<?php

namespace Vika\Modul\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface;


class Uninstall implements UninstallInterface
{

    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->dropTable($setup, 'Vika_table');
    }


    private function dropTable(SchemaSetupInterface $setup, $tableName)
    {
        $connection = $setup->getConnection();
        $connection->dropTable($this->getTableNameWithPrefix($setup, $tableName));
    }

    private function getTableNameWithPrefix(SchemaSetupInterface $setup, $tableName)
    {
        return $setup->getTable($tableName);
    }
}
