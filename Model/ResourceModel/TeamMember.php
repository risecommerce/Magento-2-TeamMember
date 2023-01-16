<?php

namespace Risecommerce\TeamMember\Model\ResourceModel;

class TeamMember extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('risecommerce_teammember', 'teammember_id');   
    }
}