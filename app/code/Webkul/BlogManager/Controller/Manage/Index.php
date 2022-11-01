<?php

namespace Webkul\BlogManager\Controller\Manage;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Customer\Controller\AbstractAccount
{
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Blogs'));
        $layout = $resultPage->getLayout();
        return $resultPage;
    }
}
