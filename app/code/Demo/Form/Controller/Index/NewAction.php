<?php

namespace Demo\Form\Controller\Index;

class NewAction extends \Magento\Framework\App\Action\Action
{
    /**
     * Create new customer action
     *
     * @return \Magento\Backend\Model\View\Result\Forward
     */
    public function execute()
    {
        $resultForward = $this->resultForwardFactory->create();

        $resultForward->forward('edit');
        return $resultForward;
    }
}
