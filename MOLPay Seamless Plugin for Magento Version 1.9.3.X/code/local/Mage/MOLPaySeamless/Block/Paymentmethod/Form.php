<?php
/**
 * Fiuu
 *
 * @package     Fiuu Magento Seamless Plugin
 * @author      netbuilder <code@netbuilder.com.my>
 * @copyright   Copyright (c) 2012 - 2014, Fiuu
 * @link        https://fiuu.com
 * @since       Version 1.8.x.x
 * @update      Fiuu <technical@fiuu.com>
 * @filesource  https://github.com/FiuuPayment/Shopping-Cart-Plugins-Fiuu_Magento
*/

class Mage_MOLPaySeamless_Block_PaymentMethod_Form extends Mage_Payment_Block_Form {
    
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('MOLPaySeamless/form/payment.phtml');
    }
}
