<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Demo\Form\Api\Data;

interface FormInterface
{

    // const ID = 'id';
    const PHONE_NUMBER = 'phone_number';
    const NAME = 'name';
    const FORM_ID = 'form_id';

    /**
     * Get form_id
     * @return string|null
     */
    public function getFormId();

    /**
     * Set form_id
     * @param string $formId
     * @return \Demo\Form\Form\Api\Data\FormInterface
     */
    public function setFormId($formId);

    /**
     * Get id
     * @return string|null
     */
    // public function getId();

    /**
     * Set id
     * @param string $id
     * @return \Demo\Form\Form\Api\Data\FormInterface
     */
    // public function setId($id);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Demo\Form\Form\Api\Data\FormInterface
     */
    public function setName($name);

    /**
     * Get phone_number
     * @return string|null
     */
    public function getPhoneNumber();

    /**
     * Set phone_number
     * @param string $phoneNumber
     * @return \Demo\Form\Form\Api\Data\FormInterface
     */
    public function setPhoneNumber($phoneNumber);
}
