<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Pfay\Contacts\Model;

use Magento\Framework\Model\AbstractModel;
use Pfay\Contacts\Api\Data\PfayContactsInterface;

class PfayContacts extends AbstractModel implements PfayContactsInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Pfay\Contacts\Model\ResourceModel\PfayContacts::class);
    }

    /**
     * @inheritDoc
     */
    public function getPfayContactsId()
    {
        return $this->getData(self::PFAY_CONTACTS_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPfayContactsId($pfayContactsId)
    {
        return $this->setData(self::PFAY_CONTACTS_ID, $pfayContactsId);
    }

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
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * @inheritDoc
     */
    public function getComment()
    {
        return $this->getData(self::COMMENT);
    }

    /**
     * @inheritDoc
     */
    public function setComment($comment)
    {
        return $this->setData(self::COMMENT, $comment);
    }
}
