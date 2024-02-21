<?php

namespace KK\Grid\Model\ResourceModel\Reviews;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    /**
     * @var string
     */
    protected $_eventPrefix = 'kk_custom_table_collection';
    /**
     * @var string
     */
    protected $_eventObject = 'reviews_collection';

    /**
     * Define resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('KK\Grid\Model\Reviews', 'KK\Grid\Model\ResourceModel\Reviews');

    }
}
