<?php

class Paymentsense_Paymentsense_Model_Source_OrderStatus
{
	public function toOptionArray()
    {
        return array(
        	 // override the order status and ONLY offer "pending" by default 
            array(
                'value' => 'new',
                'label' => Mage::helper('Paymentsense')->__('Pending')
            ),
        );
    }
}