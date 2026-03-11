<?php
/**
 * Razer Merchant Services Sdn. Bhd.
 *
 * @package     Fiuu Magento Plugin
 * @author      netbuilder <code@netbuilder.com.my>
 * @copyright   Copyright (c) 2012 - 2016, MOLPay
 * @link        http://fiuu.com
 * @since       Version 1.9.x.x
 * @update      MOLPay <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
 */

class Mage_MOLPay_Block_PaymentMethod_Redirect extends Mage_Core_Block_Abstract {
    
    protected function _toHtml() { 
        $Params = $this->getRequest()->getParams();
        $orderid = isset( $Params['order_id'] )? $Params['order_id']*1 : 0;
        
        $pm = Mage::getModel('molpay/paymentmethod');

        $form = new Varien_Data_Form();
        $form->setAction($pm->getMOLPayUrl())
                ->setId('molpay_paymentmethod_checkout')
                ->setName('molpay_paymentmethod_checkout')
                ->setMethod('POST')
                ->setUseContainer(true);

        foreach ($pm->getPaymentmethodCheckoutFormFields( $orderid ) as $field => $value) {
            $form->addField($field, 'hidden', array( 'name' => $field, 'value' => $value ));
        }

        $html = '<html><body>'."\n";
        $html .= $this->__('You will be redirected to Fiuu in a few seconds.')."\n";
        $html .= $form->toHtml();
        $html .= '<script type="text/javascript">document.getElementById("molpay_paymentmethod_checkout").submit();</script>';
        $html .= '</body></html>';

        return $html;
    }
}

