<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Demo\Form\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface FormRepositoryInterface
{

    /**
     * Save Form
     * @param \Demo\Form\Api\Data\FormInterface $form
     * @return \Demo\Form\Api\Data\FormInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Demo\Form\Api\Data\FormInterface $form);

    /**
     * Retrieve Form
     * @param string $formId
     * @return \Demo\Form\Api\Data\FormInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($formId);

    /**
     * Retrieve Form matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Demo\Form\Api\Data\FormSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Form
     * @param \Demo\Form\Api\Data\FormInterface $form
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Demo\Form\Api\Data\FormInterface $form);

    /**
     * Delete Form by ID
     * @param string $formId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($formId);
}
