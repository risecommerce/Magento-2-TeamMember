<?php

namespace Risecommerce\TeamMember\Block;

/**
 * TeamMember content block
 */
class TeamMember extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Risecommerce TeamMember Module'));
        
        return parent::_prepareLayout();
    }
}
