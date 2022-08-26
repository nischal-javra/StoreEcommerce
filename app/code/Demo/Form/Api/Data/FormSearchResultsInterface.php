<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Demo\Form\Api\Data;

interface FormSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Form list.
     * @return \Demo\Form\Api\Data\FormInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \Demo\Form\Api\Data\FormInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
