<?php

namespace Gercpay\Payment\Block\Form;

/**
 * Abstract class for Gercpay payment method form.
 */
abstract class Gercpay extends \Magento\Payment\Block\Form
{
    /**
     * @var
     */
    protected $_instructions;

    /**
     * @var string
     */
    protected $_template = 'html/gercpay_form.phtml';
}
