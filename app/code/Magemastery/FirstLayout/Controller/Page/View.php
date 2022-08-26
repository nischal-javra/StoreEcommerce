<?php

declare(strict_types=1);

namespace Magemastery\FirstLayout\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        /** @var Page $resultPage */
       // return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        //The idea behind creating a TYPE_PAGE type of a result object is to trigger the Magento 2 rendering mechanism.

        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $block = $page->getLayout()->getBlock('magemastery.first.layout.example');
        $block->setData('customer_parameter', 'Data from the controller');

        return $page;
    }
}