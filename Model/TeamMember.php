<?php

namespace Risecommerce\TeamMember\Model;

use Magento\Framework\Model\AbstractModel;

class TeamMember extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Risecommerce\TeamMember\Model\ResourceModel\TeamMember');
    }
}