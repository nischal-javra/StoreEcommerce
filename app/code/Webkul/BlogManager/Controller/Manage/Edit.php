<?php

namespace Webkul\BlogManager\Controller\Manage;


use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\View\Result\PageFactory;
use Webkul\BlogManager\Model\BlogFactory;

class Edit extends \Magento\Customer\Controller\AbstractAccount
{
    public $resultPageFactory;
    public $blogFactory;
    public $customerSession;
    public $messageManager;

    public function __construct(Context $context,
                                PageFactory $resultPageFactory,
                                BlogFactory $blogFactory,
                                Session $customerSession,
                                ManagerInterface $messageManager)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->blogFactory = $blogFactory;
        $this->customerSession = $customerSession;
        $this->messageManager = $messageManager;
        parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $blogId = $this->getRequest()->getParams('id');
        $customerId = $this->customerSession->getCustomerId();
        $isAuthorised = $this->blogFactory->create()
                                    ->getCollection()
                                    ->addFieldToFilter('user_id', $customerId)
                                    ->addFieldToFilter('entity_id', $blogId)
                                    ->getSize();

        if(!$isAuthorised) {
            $this->messageManager->addError(__("You are not authorised to edit this blog."));
            return $this->resultRedirectFactory->create()->setPath('blog/manage');
        }
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Edit Blog'));
        $layout = $resultPage->getLayout();
        return $resultPage;
    }
}
