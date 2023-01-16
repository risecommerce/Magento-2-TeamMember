<?php

namespace Risecommerce\TeamMember\Block\Adminhtml\Items\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('risecommerce_teammember_items_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Item'));
    }
}
