<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Pfay\Contacts\Api\Data;

interface PfayContactsInterface
{

    const EMAIL = 'email';
    const COMMENT = 'comment';
    const PFAY_CONTACTS_ID = 'pfay_contacts_id';
    const NAME = 'name';

    /**
     * Get pfay_contacts_id
     * @return string|null
     */
    public function getPfayContactsId();

    /**
     * Set pfay_contacts_id
     * @param string $pfayContactsId
     * @return \Pfay\Contacts\PfayContacts\Api\Data\PfayContactsInterface
     */
    public function setPfayContactsId($pfayContactsId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Pfay\Contacts\PfayContacts\Api\Data\PfayContactsInterface
     */
    public function setName($name);

    /**
     * Get email
     * @return string|null
     */
    public function getEmail();

    /**
     * Set email
     * @param string $email
     * @return \Pfay\Contacts\PfayContacts\Api\Data\PfayContactsInterface
     */
    public function setEmail($email);

    /**
     * Get comment
     * @return string|null
     */
    public function getComment();

    /**
     * Set comment
     * @param string $comment
     * @return \Pfay\Contacts\PfayContacts\Api\Data\PfayContactsInterface
     */
    public function setComment($comment);
}
