<?php

namespace Practice\JsonParsing\Controller\Index;

use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\NoSuchEntityException;

class GetSku extends Action {
    protected $_productRepository;

    public function __construct(Context $context, ProductRepository $productRepository)
    {
        $this->_productRepository = $productRepository;
        parent::__construct($context);
    }

    public function skuExistsOrNot($sku, $item)
    {
        try {
            $products = $this->_productRepository->get($sku);
            echo "Existing SKU" . $sku . '</br>';
//            var_dump($item);
            $price = $item['price'];
            var_dump($price);
            $products->setData('price', $price);
            $products->save();
            var_dump($products->getData('price'));

        } catch (NoSuchEntityException $e) {
            echo "SKU doesn't exists" . $sku . '</br>';
        }
    }

    public function execute()
    {
        $json = file_get_contents("/var/www/html/project-community-edition/app/code/Practice/JsonParsing/var/product.json");
        $string = json_decode($json, true);
        $sku_array = array_map(function ($item) {
            $this->skuExistsOrNot($item['sku'], $item);
        }, $string);
//        $price_array = array_map(function ($rate) {
//            return $rate['price'];
//        }, $string);
//        var_dump($price_array);
//        echo "</br>";
//        foreach ($string as $items) {
//            if($this->_productRepository->get($items['sku'])) {
//                echo '</pre>';
//                var_dump($items );
//                echo '</pre>';
//            }
//        }
    }
}
