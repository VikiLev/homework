<?php


namespace Vika\Modul\Setup;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;


class UpgradeSchema implements UpgradeSchemaInterface
{

    private $table;

    private $connection;

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $this->table = $setup->getTable('Vika_table');
        $this->connection = $setup->getConnection();

        if (version_compare($context->getVersion(), '2.0.0') < 0) {
            $this->addColumnLastname();
        }

        $setup->endSetup();
    }

    private function addColumnLastname()
    {
        $this->connection->addColumn(
            $this->table,
            'lastname',
            [
                'type' => Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Lastname'
            ]
        );
    }
}