<?php

namespace KK\Grid\Model\ResourceModel;

class Reviews extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct() {
        $this->_init('kk_custom_table', 'id');
    }
}
