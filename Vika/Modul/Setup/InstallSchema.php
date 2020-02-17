<?php


namespace Vika\Modul\Setup;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;


class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()
            ->newTable($setup->getTable('Vika_table'))
            ->addColumn(
                'entity_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'primary'  => true, 'nullable' => false],
                'Entity Id'
            )->addColumn(
                'name',
                Table::TYPE_TEXT,
                null,
                [ 'nullable' => false],
                'Name'
            )->addColumn(
                'email',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Email'
            )->addColumn(
                'sex',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'sex'
            )->addIndex(
                $setup->getIdxName($setup->getTable('Vika_table'), ['entity_id'], AdapterInterface::INDEX_TYPE_INDEX),
                ['entity_id'],
                [
                    'type' => AdapterInterface::INDEX_TYPE_INDEX
                ]
            );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}