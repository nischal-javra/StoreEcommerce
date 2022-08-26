<?php

namespace Store\Ecommerce\Block\Index;

class Index extends \Store\Ecommerce\Block\BaseBlock
{
    /**
     * Returns action url for contact form. Form submit URL
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('ecommerce/index/post', ['_secure' => true]);
    }
}
