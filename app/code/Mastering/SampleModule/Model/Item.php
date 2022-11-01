<?php

namespace Mastering\SampleModule\Model;

use Magento\Framework\DataObject\IdentityInterface;

class Item extends \Magento\Framework\Model\AbstractModel implements IdentityInterface
{
    public function _construct()
    {
        $this->_init(\Mastering\SampleModule\Model\ResourceModel\Item::class);
    }

    public function getIdentities()
    {

    }
}
