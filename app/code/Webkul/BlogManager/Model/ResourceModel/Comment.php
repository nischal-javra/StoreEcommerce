<?php

namespace Webkul\BlogManager\Model\ResourceModel;

class Comment extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        // TODO: Implement _construct() method.
        $this->_init("blogmanager_comment", "entity_id");
    }
}
