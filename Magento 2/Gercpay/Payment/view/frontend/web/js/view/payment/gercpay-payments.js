/*browser:true*/
/*global define*/
define(
  [
    'uiComponent',
    'Magento_Checkout/js/model/payment/renderer-list'
  ],
  function (Component, rendererList) {
    'use strict';
    rendererList.push(
      {
        type: 'gercpay',
        component: 'Gercpay_Payment/js/view/payment/method-renderer/gercpay-method'
      }
    );

    return Component.extend({});
  }
);
