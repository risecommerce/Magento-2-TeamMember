<?php

namespace Risecommerce\TeamMember\Controller\Adminhtml\Items;

class NewAction extends \Risecommerce\TeamMember\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
