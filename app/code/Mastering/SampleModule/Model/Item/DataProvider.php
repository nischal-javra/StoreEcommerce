<?php


namespace Mastering\SampleModule\Model\Item;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    protected $collection;

    public function __construct($name, $primaryFieldName, $requestFieldName,
                                \Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory $collectionFactory,
                                array $meta = [], array $data = [])
    {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);

    }

    public function getData()
    {
//        $result = [];
//        foreach ($this->collection->getItems() as $item) {
//            $result[$item->getId()] ['general'] = $item->getData();
//        }
//
//        return $result;

        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $blog) {
            $this->loadedData[$blog->getId()] = $blog->getData();
        }
        return $this->loadedData;

    }
}
