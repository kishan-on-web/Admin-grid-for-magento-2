<?php

namespace KK\Grid\Model;

class Reviews extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{

    const CACHE_TAG = 'form_customer_reviews';
    /**
     * @var string
     */
    protected $_cacheTag = 'form_customer_reviews';
    /**
     * @var string
     */
    protected $_eventPrefix = 'form_customer_reviews';

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('KK\Grid\Model\ResourceModel\Reviews');
    }

    /**
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}
