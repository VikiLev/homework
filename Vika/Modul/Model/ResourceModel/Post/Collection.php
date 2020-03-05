<?php
namespace Vika\Modul\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'Vika_table_collection';
    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        $this->_init('Vika\Modul\Model\Post', 'Vika\Modul\Model\ResourceModel\Post');
    }

}

