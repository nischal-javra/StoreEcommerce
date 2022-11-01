<?php

namespace Webkul\BlogManager\Block;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Element\Template;

class BlogList extends \Magento\Framework\View\Element\Template
{
    public $blogCollection;

    public function __construct(Template\Context $context,
                                \Webkul\BlogManager\Model\ResourceModel\Blog\CollectionFactory $blogCollection,
                                Session $customerSession,
                                array $data=[])
    {
        $this->blogCollection = $blogCollection;
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }

    public function getBlogs()
    {
//        $customerId = $this->customerSession->getCustomer()->getId();
        $collection = $this->blogCollection->create()->setOrder('updated_at', 'DESC');
        return $collection;
    }
}
