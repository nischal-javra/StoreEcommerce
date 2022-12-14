<?php

namespace Demo\Form\Block;

use Magento\Framework\View\Element\Template;
use Mageplaza\HelloWorld\Model\PostFactory;

class Display extends Template
{
    protected $_postFactory;
    public function __construct(Template\Context $context, PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello Nischal');
    }

    public function getPostCollection()
    {
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}
