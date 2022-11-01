<?php

namespace Webkul\BlogManager\Controller\Adminhtml\Manage;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Edit extends \Magento\Backend\App\Action implements HttpGetActionInterface
{

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $blogId = $this->getRequest()->getParam('id');
        $isExistingBlog = (bool) $blogId;
        $blogData = [];
        if($isExistingBlog) {
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
            $resultPage->getConfig()->getTitle()->prepend(__('Edit Blog'));
            return $resultPage;
        }
        else {
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
            $resultPage->getConfig()->getTitle()->prepend(__('Add Blog'));
            return $resultPage;
        }
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Webkul_BlogManager::edit');
    }
}
