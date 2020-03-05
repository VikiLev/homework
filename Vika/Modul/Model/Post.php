<?php
namespace Vika\Modul\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'Vika_table';

    protected $_cacheTag = 'Vika_table';

    protected $_eventPrefix = 'Vika_table';

    protected function _construct()
    {
        $this->_init('Vika\Modul\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
