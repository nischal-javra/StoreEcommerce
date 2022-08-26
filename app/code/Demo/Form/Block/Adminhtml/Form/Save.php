<?php

namespace Demo\Form\Controller\Adminhtml\Form;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory;
use Demo\Form\Model\Form;
use Demo\Form\Model\ResourceModel\Form\Collection;

/**
* Class Save
*
* @package SyncIt\Brand\Controller\Adminhtml\Brand
*/
class Save extends Action
{
   /**
    * @var CategoryRepositoryInterface
    */
   protected $categoryRepository;
   /**
    * @var \Magento\Framework\App\Request\DataPersistorInterface
    */
   protected $dataPersistor;
   /**
    * @var \Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory
    */
   protected $attributeFactory;

   /**
    * @param \Magento\Backend\App\Action\Context                       $context
    * @param \Magento\Framework\App\Request\DataPersistorInterface     $dataPersistor
    * @param \Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory $attributeFactory
    * @param \Magento\Catalog\Api\CategoryRepositoryInterface          $categoryRepository
    */
   public function __construct(
       Context $context,
       DataPersistorInterface $dataPersistor,
       AttributeFactory $attributeFactory,
       CategoryRepositoryInterface $categoryRepository
   ) {
       $this->dataPersistor = $dataPersistor;
       $this->attributeFactory = $attributeFactory;
       $this->categoryRepository = $categoryRepository;
       parent::__construct($context);
   }

   /**
    * Save action
    *
    * @return \Magento\Framework\Controller\ResultInterface
    * @throws \Magento\Framework\Exception\LocalizedException
    */
   public function execute()
   {
       /**
        * @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect
        */
       $resultRedirect = $this->resultRedirectFactory->create();
       $data = $this->getRequest()->getPostValue();
       if ($data) {
           $id = $this->getRequest()->getParam('form_id');
      
           $model = $this->_objectManager->create(Name::class)->load($id);
           if (!$model->getId() && $id) {
               $this->messageManager->addErrorMessage(__('This Name no longer exists.'));
               return $resultRedirect->setPath('*/*/');
           }

        //    $attr = $this->attributeFactory->create()->loadByCode('catalog_product', 'brand');
        //    if ($attr->usesSource()) {
        //        $brandName = $attr->getSource()->getOptionText($data['brand']);
        //        $model->setData('brand_name', $brandName);
        //    }

        $model->setData($data);

           try {
               $model->save();
               $this->messageManager->addSuccessMessage(__('You saved the Name.'));
               $this->dataPersistor->clear('demo_form_form');
      
               if ($this->getRequest()->getParam('back')) {
                   return $resultRedirect->setPath('*/*/edit', ['form_id' => $model->getId()]);
               }
               return $resultRedirect->setPath('*/*/');
           } catch (LocalizedException $e) {
               $this->messageManager->addErrorMessage($e->getMessage());
           } catch (\Exception $e) {
               $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Brand.'));
           }
      
           $this->dataPersistor->set('demo_form_form', $data);
           return $resultRedirect->setPath('*/*/edit', ['form_id' => $this->getRequest()->getParam('form_id')]);
       }
       return $resultRedirect->setPath('*/*/');
   }
}