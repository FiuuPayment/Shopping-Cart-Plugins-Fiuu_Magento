<?php
/**
 * Razer Merchant Services Sdn. Bhd.
 *
 * @package     Fiuu Magento Plugin
 * @author      netbuilder <code@netbuilder.com.my>
 * @copyright   Copyright (c) 2012 - 2014, MOLPay
 * @link        http://fiuu.com
 * @since       Version 1.8.x.x
 * @update      MOLPay <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
 */

class Mage_MOLPay_Model_PaymentMethod_Source_Cctype extends Mage_Payment_Model_Source_Cctype {
    public function getAllowedTypes() {
        return array('VI', 'MC', 'AE', 'DI', 'OT');
    }
}