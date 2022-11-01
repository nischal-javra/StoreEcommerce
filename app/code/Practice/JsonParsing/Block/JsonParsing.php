<?php

namespace Practice\JsonParsing\Block;

use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\View\Element\Template;

class JsonParsing extends \Magento\Framework\View\Element\Template
{
    protected $_productRepository;

    public function __construct(
        Template\Context $context,
        ProductRepository $productRepository,
        array $data = [])
    {
        $this->_productRepository = $productRepository;
        parent::__construct($context, $data);
    }

    public function getProductById($id)
    {
        return $this->_productRepository->getById($id);
    }

    public function getProductBySku($sku)
    {
        return $this->_productRepository->get($sku);
    }

    public function skuExists($sku)
    {
        if ($this->_productRepository->get($sku)) {
            echo('Product is Exist');
        } else {
            echo('Product does not Exist');
        }
    }
}
