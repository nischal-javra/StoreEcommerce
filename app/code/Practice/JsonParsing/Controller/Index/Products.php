<?php

namespace Practice\JsonParsing\Controller\Index;

use Magento\Framework\App\Action\Context;
use Practice\JsonParsing\Logger\Logger;
use Practice\JsonParsing\Controller\Index\NiscalHelper;

class Products extends \Magento\Framework\App\Action\Action
{

    /**
     * @inheritDoc
     */
    protected $_customLogger;
    /**
     * @var \Practice\JsonParsing\Controller\Index\NiscalHelper
     */
    private $_niscalHelper;

    public function __construct(Context $context, Logger $customLogger, NiscalHelper $niscalHelper)
    {
        $this->_niscalHelper = $niscalHelper;
        $this->_customLogger = $customLogger;
        parent::__construct($context);
    }

    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $productRepository = $objectManager->get('\Magento\Catalog\Model\ProductRepository');

        try {
            $sku = '';
            $price = 65;
            echo "Before";
            $product = $productRepository->get($sku);
            $this->_niscalHelper->setIsSucsess(true);
            $this->_customLogger->warning('SKU exists');
            echo $product->getName();
            echo '<br/>';
            echo $product->getId();
            echo '<br/>';
            echo $product->getPrice();
            echo '<br/>';
            echo $product->getSku($sku);

            try {
//                $item = $objectManager->create('Magento\Catalog\Model\Product')->load($sku);
                $product->setData('price', $price);
                $product->save();
                echo '<br/>';
                echo 'After';
                echo $product->getName();
                echo '<br/>';
                echo $product->getPrice();
                echo '<br/>';
                echo $product->getId();
                echo '<br/>';
                echo $product->getSku();
            }
            catch (\Exception $e) {
                echo "Error Id: " . $sku;
            }
        }
        catch (\Exception $e) {
            $this->_niscalHelper->setIsSucsess(0);
            echo "Given sku not found " . $sku;
            $this->_customLogger->warning('SKU doesnot exists');
        }
    }
}
