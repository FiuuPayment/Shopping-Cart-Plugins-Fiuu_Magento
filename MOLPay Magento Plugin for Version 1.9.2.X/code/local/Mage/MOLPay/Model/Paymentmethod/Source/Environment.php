<?php
/**
 * Fiuu
 *
 * @package     Fiuu Magento Plugin
 * @link        https://fiuu.com
 * @update      Fiuu <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
 */

class Mage_MOLPay_Model_PaymentMethod_Source_Environment {
    public function toOptionArray() {
        return array(
            array('value' => 'production', 'label' => Mage::helper('molpay')->__('Production')),
            array('value' => 'sandbox', 'label' => Mage::helper('molpay')->__('Sandbox'))
        );
    }
}
