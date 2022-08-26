<?php
namespace Mageplaza\HelloWorld\Model\Source;

/**
 * Class Approved
 * @package Mageplaza\HelloWorld\Model\Source
 */
class Approved implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Retrieve status options array.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('No')],
            ['value' => 1, 'label' => __('Yes')]
        ];
    }
}
