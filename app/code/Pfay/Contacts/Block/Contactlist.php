<?php

namespace Pfay\Contacts\Block;

use Magento\Framework\View\Element\Template;

class Contactlist extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->setData('contacts', array());
    }

    public function addContacts($count)
    {
        $_contacts = $this->getData('contacts');

        $actualNumber = count($_contacts);

        $names = array();
        for($i = $actualNumber; $i < ($actualNumber + $count); $i++) {
            $_contacts[] = 'num' . ($i + 1);
        }
        $this->setData('contacts', $_contacts);
    }
}
