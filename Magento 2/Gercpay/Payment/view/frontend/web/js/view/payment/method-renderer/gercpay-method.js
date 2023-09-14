define(
  [
    'ko',
    'Magento_Checkout/js/view/payment/default'
  ],
  function (ko, Component) {
    'use strict';

    return Component.extend({
      defaults: {
        template: 'Gercpay_Payment/payment/gercpay'
      },

      /**
       * Get value of instruction field.
       * @returns {String}
       */
      getInstructions: function () {
        //return window.checkoutConfig.payment.instructions[this.item.method];
      }
    });
  }
);
