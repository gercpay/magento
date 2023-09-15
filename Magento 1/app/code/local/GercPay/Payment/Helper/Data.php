<?php


class GercPay_Payment_Helper_Data extends Mage_Core_Helper_Abstract
{
    const SIGNATURE_SEPARATOR   = ';';
    const ORDER_APPROVED        = 'Approved';
    const RESPONSE_TYPE_PAYMENT = 'payment';
    const RESPONSE_TYPE_REVERSE = 'reverse';

    /** @var array */
    protected $keysForResponseSignature = array(
        'merchantAccount',
        'orderReference',
        'amount',
        'currency'
    );

    /** @var array */
    protected $keysForSignature = array(
        'merchant_id',
        'order_id',
        'amount',
        'currency_iso',
        'description'
    );

    /**
     * @var string[]
     */
    protected $operationTypes = array(
        'payment',
        'reverse'
    );

    /**
     * GercPay API URL
     *
     * @var string
     */
    protected $apiUrl = 'https://api.gercpay.com.ua/api/';

    /**
     * @param $option
     * @param $keys
     * @return string
     */
    public function getSignature($option, $keys)
    {
        $hash = array();
        foreach ($keys as $dataKey) {
            if (!isset($option[$dataKey])) {
                continue;
            }
            if (is_array($option[$dataKey])) {
                foreach ($option[$dataKey] as $v) {
                    $hash[] = $v;
                }
            } else {
                $hash [] = $option[$dataKey];
            }
        }

        $hash = implode(self::SIGNATURE_SEPARATOR, $hash);

        $secret = Mage::getModel('gercpay_payment/gercpay')->getConfigData('secret_key');
//        $callbacklogMsg = "";
//        $callbacklogMsg .= "\r\n==================================================================";
//        $callbacklogMsg .= "\r\n" . date('d M Y H:i:s', time());
//        $callbacklogMsg .= "\r\nhash: " . json_encode($hash);
//        $callbacklogMsg .= "\r\nsecret: " . $secret;
//        $callbacklogMsg .= "\r\nSignature: " . hash_hmac('md5', $hash, $secret);
//        file_put_contents('/var/www/magento-two/var/log/gercpayCallback.log', $callbacklogMsg, FILE_APPEND);
        return hash_hmac('md5', $hash, $secret);
    }

    /**
     * @param $options
     * @return string
     */
    public function getRequestSignature($options)
    {
        return $this->getSignature($options, $this->keysForSignature);
    }

    /**
     * @param $options
     * @return string
     */
    public function getResponseSignature($options)
    {
        return $this->getSignature($options, $this->keysForResponseSignature);
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return Mage::getStoreConfig('payment/gercpay_payment/url');
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * @return string[]
     */
    public function getOperationTypes()
    {
        return $this->operationTypes;
    }
}