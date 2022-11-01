<?php

namespace Webkul\BlogManager\Block;

use Magento\Framework\View\Element\Template;
use Webkul\BlogManager\Model\BlogFactory;

class Blog extends \Magento\Framework\View\Element\Template
{
    public $blogFactory;

    public function __construct(Template\Context $context,BlogFactory $blogFactory, array $data = [])
    {
        $this->blogFactory = $blogFactory;
        parent::__construct($context, $data);
    }

    public function getBlog()
    {
        $blogId = $this->getRequest()->getParams('id');
        return $this->blogFactory->create()->load($blogId);
    }
}
