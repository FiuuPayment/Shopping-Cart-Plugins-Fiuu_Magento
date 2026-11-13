<?php
/**
 * Fiuu
 *
 * @package     Fiuu Magento Seamless Plugin
 * @link        https://fiuu.com
 * @update      Fiuu <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
 */

class Mage_MOLPaySeamless_Model_PaymentMethod_Source_Environment {
    public function toOptionArray() {
        return array(
            array('value' => 'production', 'label' => Mage::helper('molpayseamless')->__('Production')),
            array('value' => 'sandbox', 'label' => Mage::helper('molpayseamless')->__('Sandbox'))
        );
    }
}
