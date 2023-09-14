<?php

class GercPay_Payment_Model_Source_Language
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'RU', 'label' => Mage::helper('gercpay_payment')->__('Russian')),
            array('value' => 'UA', 'label' => Mage::helper('gercpay_payment')->__('Ukrainian')),
            array('value' => 'EN', 'label' => Mage::helper('gercpay_payment')->__('English')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'RU' => Mage::helper('gercpay_payment')->__('Russian'),
            'UA' => Mage::helper('gercpay_payment')->__('Ukrainian'),
            'EN' => Mage::helper('gercpay_payment')->__('English')
        );
    }
}
