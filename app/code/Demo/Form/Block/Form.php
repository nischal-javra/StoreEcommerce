<?php

namespace Demo\Form\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;

class Form extends Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('form/index/submit', ['_secure' => true]);
    }
}
