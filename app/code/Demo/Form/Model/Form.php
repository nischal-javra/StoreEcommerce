<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Demo\Form\Model;

use Demo\Form\Api\Data\FormInterface;
use Magento\Framework\Model\AbstractModel;

class Form extends AbstractModel implements FormInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Demo\Form\Model\ResourceModel\Form::class);
    }

    /**
     * @inheritDoc
     */
    public function getFormId()
    {
        return $this->getData(self::FORM_ID);
    }

    /**
     * @inheritDoc
     */
    public function setFormId($formId)
    {
        return $this->setData(self::FORM_ID, $formId);
    }

    // /**
    //  * @inheritDoc
    //  */
    // public function getId()
    // {
    //     return $this->getData(self::ID);
    // }

    // /**
    //  * @inheritDoc
    //  */
    // public function setId($id)
    // {
    //     return $this->setData(self::ID, $id);
    // }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getPhoneNumber()
    {
        return $this->getData(self::PHONE_NUMBER);
    }

    /**
     * @inheritDoc
     */
    public function setPhoneNumber($phoneNumber)
    {
        return $this->setData(self::PHONE_NUMBER, $phoneNumber);
    }
}
