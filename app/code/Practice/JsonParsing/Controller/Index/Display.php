<?php

namespace Practice\JsonParsing\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Display extends \Magento\Framework\App\Action\Action
{

    /**
     * @inheritDoc
     */

    protected $_pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->_pageFactory->create();
    }
}
