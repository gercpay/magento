<?php

class GercPay_Payment_Model_Source_Currency
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'UAH', 'label' => Mage::helper('gercpay_payment')->__('Ukrainian Hryvnia')),
            array('value' => 'RUB', 'label' => Mage::helper('gercpay_payment')->__('Russian Ruble')),
            array('value' => 'USD', 'label' => Mage::helper('gercpay_payment')->__('U.S. Dollar')),
            array('value' => 'EUR', 'label' => Mage::helper('gercpay_payment')->__('Euro')),
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
            'UAH' => Mage::helper('gercpay_payment')->__('Ukrainian Hryvnia'),
            'RUB' => Mage::helper('gercpay_payment')->__('Russian Ruble'),
            'USD' => Mage::helper('gercpay_payment')->__('U.S. Dollar'),
            'EUR' => Mage::helper('gercpay_payment')->__('Euro'),
        );
    }
}
