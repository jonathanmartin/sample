<?php
class Excellence_Samples_Block_Checkout_Onepage_Samples extends Mage_Checkout_Block_Onepage_Abstract{
	protected function _construct()
	{
		$this->getCheckout()->setStepData('samples', array(
            'label'     => Mage::helper('checkout')->__('Complimentary Fragrance Samples of Your Choice'),
            'is_show'   => $this->isShow()
		));
		if ($this->isCustomerLoggedIn()) {
			$this->getCheckout()->setStepData('samples', 'allow', true);
			$this->getCheckout()->setStepData('billing', 'allow', false);
		}

		parent::_construct();
	}
}