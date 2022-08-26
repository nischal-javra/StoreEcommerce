<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Demo\Form\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Form extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('demo_form_form', 'form_id');
    }
}
