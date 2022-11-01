<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Demo\Form\Model\ResourceModel\Form;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'form_id';
    protected $_eventPrefix = 'demo_form_form_collection';
    protected $_eventObject = 'form_collection';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Demo\Form\Model\Form::class,
            \Demo\Form\Model\ResourceModel\Form::class
        );
    }
}
