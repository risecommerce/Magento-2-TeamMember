<?php 
namespace Risecommerce\TeamMember\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
use Magento\Framework\View\Element\Template\Context;
use Risecommerce\TeamMember\Model\TeamMemberFactory;
 
class Posts extends Template implements BlockInterface {

	protected $_template = "widget/posts.phtml";

	protected $_teammember;
    public function __construct(
        Context $context,
        TeamMemberFactory $teammember
    ) {
        $this->_teammember = $teammember;
        parent::__construct($context);
    }

	public function getTeamMemberCollection()
    {
        $teammember = $this->_teammember->create();
        $collection = $teammember->getCollection();
        $collection->addFieldToFilter('status','1');
        return $collection;
    }

}