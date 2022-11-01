<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Pfay\Contacts\Api\Data;

interface PfayContactsSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get pfay_contacts list.
     * @return \Pfay\Contacts\Api\Data\PfayContactsInterface[]
     */
    public function getItems();

    /**
     * Set pfay_contacts_id list.
     * @param \Pfay\Contacts\Api\Data\PfayContactsInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
