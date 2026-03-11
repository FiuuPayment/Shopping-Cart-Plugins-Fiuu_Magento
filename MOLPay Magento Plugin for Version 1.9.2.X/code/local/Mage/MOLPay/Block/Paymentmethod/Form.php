<?php
/**
 * Razer Merchant Services Sdn. Bhd.
 *
 * @package     Fiuu Magento Plugin
 * @author      netbuilder <code@netbuilder.com.my>
 * @copyright   Copyright (c) 2012 - 2016, Fiuu
 * @link        http://fiuu.com
 * @since       Version 1.9.x.x
 * @update      Fiuu <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
 */

class Mage_MOLPay_Block_PaymentMethod_Form extends Mage_Payment_Block_Form {
    
    protected function _construct() {   
        parent::_construct();
    }
    
    protected function _toHtml() {  

    $skeleton = Mage::getSingleton("molpay/paymentmethod")->getConfigData('paymentdescription');
    if( $skeleton == "" ) {
        $skeleton = "You will be redirected to Fiuu website when you place an order.<br>";
    }
    return "<fieldset class=\"form-list\">
              <ul id=\"payment_form_molpay\" style=\"display: none;\">
               <li>" . $skeleton . "</li>
              </ul>
            </fieldset>";
    }  
}
