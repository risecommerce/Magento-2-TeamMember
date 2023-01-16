<?php

namespace Risecommerce\TeamMember\Controller\Adminhtml\Items;

class Index extends \Risecommerce\TeamMember\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Risecommerce_TeamMember::team');
        $resultPage->getConfig()->getTitle()->prepend(__('Team Members'));
        $resultPage->addBreadcrumb(__('Team'), __('Team'));
        $resultPage->addBreadcrumb(__('Members'), __('Members'));
        return $resultPage;
    }
}