<?php
/**
 * Fiuu
 *
 * @package     Fiuu Magento Seamless Plugin
 * @link        https://fiuu.com
 * @update      Fiuu <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
 */

// Loads the Fiuu seamless JS for the selected environment: sandbox uses the latest version, production uses 3.28 (same as the WooCommerce plugin)
class Mage_MOLPaySeamless_Block_Seamlessjs extends Mage_Core_Block_Abstract {
    protected function _toHtml() {
        $pm = Mage::getModel('molpayseamless/paymentmethod');
        $version = $pm->isSandbox() ? 'latest' : '3.28';
        return '<script type="text/javascript" src="' . $pm->getPaymentHost() . '/RMS/API/seamless/' . $version . '/js/MOLPay_seamless.deco.js"></script>';
    }
}
