<?php

namespace Mastering\SampleModule\Model\ResourceModel;

class Item extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('mastering_sample_item', 'id');
    }
}
