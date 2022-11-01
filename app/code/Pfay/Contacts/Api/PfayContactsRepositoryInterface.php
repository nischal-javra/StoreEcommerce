<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Pfay\Contacts\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PfayContactsRepositoryInterface
{

    /**
     * Save pfay_contacts
     * @param \Pfay\Contacts\Api\Data\PfayContactsInterface $pfayContacts
     * @return \Pfay\Contacts\Api\Data\PfayContactsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Pfay\Contacts\Api\Data\PfayContactsInterface $pfayContacts
    );

    /**
     * Retrieve pfay_contacts
     * @param string $pfayContactsId
     * @return \Pfay\Contacts\Api\Data\PfayContactsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($pfayContactsId);

    /**
     * Retrieve pfay_contacts matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Pfay\Contacts\Api\Data\PfayContactsSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete pfay_contacts
     * @param \Pfay\Contacts\Api\Data\PfayContactsInterface $pfayContacts
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Pfay\Contacts\Api\Data\PfayContactsInterface $pfayContacts
    );

    /**
     * Delete pfay_contacts by ID
     * @param string $pfayContactsId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($pfayContactsId);
}
