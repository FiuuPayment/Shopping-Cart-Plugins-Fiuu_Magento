<?php
/**
 * Fiuu
 *
 * @package     Fiuu Magento Plugin
 * @author      netbuilder <code@netbuilder.com.my>
 * @copyright   Copyright (c) 2012 - 2014, Fiuu
 * @link        http://fiuu.com
 * @since       Version 1.8.x.x
 * @update      Fiuu <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
 */

class Mage_MOLPay_Model_Mysql4_PaymentMethod_Debug extends Mage_Core_Model_Mysql4_Abstract {
    protected function _construct() {
        $this->_init('molpay/paymentmethod_debug', 'debug_id');
    }
}