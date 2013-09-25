<?php
class Excellence_Samples_Block_Checkout_Onepage extends Mage_Checkout_Block_Onepage{

	public function getSteps()
	{
		$steps = array();

		if (!$this->isCustomerLoggedIn()) {
			$steps['login'] = $this->getCheckout()->getStepData('login');
		}
		$stepCodes = array('samples','billing', 'shipping', 'shipping_method', 'payment','review');

		foreach ($stepCodes as $step) {
			$steps[$step] = $this->getCheckout()->getStepData($step);
		}
		return $steps;
	}

	public function getActiveStep()
	{
		return $this->isCustomerLoggedIn() ? 'samples' : 'login';
	}

}