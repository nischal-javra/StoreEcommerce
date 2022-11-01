<?php

namespace Practice\JsonParsing\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Psr\Log\LoggerInterface;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var JsonFactory
     */
    protected $resultJsonFactory;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(Context $context,
                                PageFactory $resultPageFactory,
                                JsonFactory $resultJsonFactory,
                                LoggerInterface $logger)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->logger = $logger;
        parent::__construct($context);
    }

    public function execute()
    {
        // Our logger would not allow to use debug.info and notice log types
        $this->logger->debug("Log Debug");
        $this->logger->info("Log Info");
        $this->logger->notice("Log Notice");

        //We can use below log types via our custom log
        $this->logger->warning('Log Warning');
        $this->logger->error('Log Error');
        $this->logger->critical('Log Critical');
        $this->logger->alert('Log Alert');
        $this->logger->emergency('Log Emergency');

        $result = $this->resultJsonFactory->create();
        $data = ['message' => 'Hello World'];

        return $result->setData($data);
    }
}
