<?php

namespace Webkul\BlogManager\Model\Blog;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    protected $loadedData;

    public function __construct($name,
                                $primaryFieldName,
                                $requestFieldName,
                                \Webkul\BlogManager\Model\ResourceModel\Blog\CollectionFactory $blogCollectionFactory,
                                array $meta = [],
                                array $data = [])
    {
        $this->collection = $blogCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if(isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $blog) {
            $this->loadedData[$blog->getId()] = $blog->getData();
        }
//        echo '<pre>';
//        print_r($blog->getData());
//        echo '</pre>';
        return $this->loadedData;
    }
}
