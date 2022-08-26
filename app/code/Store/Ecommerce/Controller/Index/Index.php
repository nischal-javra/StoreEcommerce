<?php

namespace Store\Ecommerce\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Cache\Frontend\Pool;
use Magento\Framework\App\Cache\StateInterface;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
//    @var \Magento\Framework\App\Cache\TypeListInterface
    protected $_cacheTypeList;

    /**
     * @var \Magento\Framework\App\Cache\TypeListInterface
     */
    protected $_cacheState;

    /**
     *@var \Magento\Framework\App\Cache\Frontend\Pool
     */
    protected $_cacheFrontendPool;

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    public function __construct(Context $context,
                                TypeListInterface $_cacheTypeList,
                                StateInterface $_cacheState,
                                Pool $_cacheFrontendPool,
                                PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->_cacheTypeList = $_cacheTypeList;
        $this->_cacheState = $_cacheState;
        $this->_cacheFrontendPool = $_cacheFrontendPool;
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        // TODO: Implement execute() method.
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->getPage()->getConfig()->getTitle()->set(__('Store Ecommerce Frontend Title'));
        /** @var\Magento\Framework\View\Result\Page $resultPage */
        $resultPage=$this->resultPageFactory->create();
        return $resultPage;

    }
}
