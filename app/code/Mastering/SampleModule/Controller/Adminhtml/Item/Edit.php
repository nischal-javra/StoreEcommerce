<?php

namespace Mastering\SampleModule\Controller\Adminhtml\Item;

use Magento\Framework\Controller\ResultFactory;

class Edit extends \Magento\Backend\App\Action
{

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $result->getConfig()->getTitle()->prepend(__('Magento Form'));
        return $result;
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Mastering_SampleModule::edit');
    }
}
