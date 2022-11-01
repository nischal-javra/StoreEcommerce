<?php
/**
 * Copyright © Nischal Shakya All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Pfay\Contacts\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Pfay\Contacts\Api\Data\PfayContactsInterface;
use Pfay\Contacts\Api\Data\PfayContactsInterfaceFactory;
use Pfay\Contacts\Api\Data\PfayContactsSearchResultsInterfaceFactory;
use Pfay\Contacts\Api\PfayContactsRepositoryInterface;
use Pfay\Contacts\Model\ResourceModel\PfayContacts as ResourcePfayContacts;
use Pfay\Contacts\Model\ResourceModel\PfayContacts\CollectionFactory as PfayContactsCollectionFactory;

class PfayContactsRepository implements PfayContactsRepositoryInterface
{

    /**
     * @var ResourcePfayContacts
     */
    protected $resource;

    /**
     * @var PfayContacts
     */
    protected $searchResultsFactory;

    /**
     * @var PfayContactsCollectionFactory
     */
    protected $pfayContactsCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var PfayContactsInterfaceFactory
     */
    protected $pfayContactsFactory;


    /**
     * @param ResourcePfayContacts $resource
     * @param PfayContactsInterfaceFactory $pfayContactsFactory
     * @param PfayContactsCollectionFactory $pfayContactsCollectionFactory
     * @param PfayContactsSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourcePfayContacts $resource,
        PfayContactsInterfaceFactory $pfayContactsFactory,
        PfayContactsCollectionFactory $pfayContactsCollectionFactory,
        PfayContactsSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->pfayContactsFactory = $pfayContactsFactory;
        $this->pfayContactsCollectionFactory = $pfayContactsCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(PfayContactsInterface $pfayContacts)
    {
        try {
            $this->resource->save($pfayContacts);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the pfayContacts: %1',
                $exception->getMessage()
            ));
        }
        return $pfayContacts;
    }

    /**
     * @inheritDoc
     */
    public function get($pfayContactsId)
    {
        $pfayContacts = $this->pfayContactsFactory->create();
        $this->resource->load($pfayContacts, $pfayContactsId);
        if (!$pfayContacts->getId()) {
            throw new NoSuchEntityException(__('pfay_contacts with id "%1" does not exist.', $pfayContactsId));
        }
        return $pfayContacts;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->pfayContactsCollectionFactory->create();

        $this->collectionProcessor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);

        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }

        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(PfayContactsInterface $pfayContacts)
    {
        try {
            $pfayContactsModel = $this->pfayContactsFactory->create();
            $this->resource->load($pfayContactsModel, $pfayContacts->getPfayContactsId());
            $this->resource->delete($pfayContactsModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the pfay_contacts: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($pfayContactsId)
    {
        return $this->delete($this->get($pfayContactsId));
    }
}
