<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Pfay\Contacts\Model\ResourceModel\PfayContacts;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'pfay_contacts_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Pfay\Contacts\Model\PfayContacts::class,
            \Pfay\Contacts\Model\ResourceModel\PfayContacts::class
        );
    }
}
