<?php

namespace Risecommerce\TeamMember\Model\ResourceModel\TeamMember;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'teammember_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Risecommerce\TeamMember\Model\TeamMember',
            'Risecommerce\TeamMember\Model\ResourceModel\TeamMember'
        );
    }
}