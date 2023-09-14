<?php

class GercPay_Payment_Block_Redirect extends Mage_Core_Block_Abstract
{
    /**
     * @return string
     */
    protected function _toHtml()
    {
        $model = Mage::getModel('gercpay_payment/gercpay');
        $data  = $model->getFormFields();
        $state = $model->getConfigData('order_status');

        $order = $model->getQuote();
        if($order){
            $order->setStatus($state);
            $order->save();
        }

        $html = '<form name="GercPay" id="GercPayForm" method="post" action="'.
            Mage::helper('gercpay_payment')->getApiUrl() . '">';
        foreach ($data['fields'] as $name => $value) {
            if (is_array($value)) {
                foreach ($value as $avalue) {
                    $html .= '<input type="hidden" name="' . $name . '[]" value="' . htmlspecialchars($avalue) . '">';
                }
            } else {
                $html .= '<input type="hidden" name="' . $name . '" value="' . htmlspecialchars($value) . '">';
            }
        }

        $html .= $data['button'];
        $html .= '</form>';
        return $html;
    }
}