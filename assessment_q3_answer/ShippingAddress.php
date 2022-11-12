<?php

/**
*
* dealing with shipping address, like address1, address2, city, zip, state
*
* @version : 1.0.0
* @access public  
*/
class ShippingAddress 
{

	private $address_line1,
	       	$address_line2,
	       	$city,
	       	$state,
	       	$zip;

	public function __construct (
									$address_line1 = "5131 Kenil, apt 302", 
									$address_line2 = "", 
									$city 		   = "Hyattsville",
									$state    	   = "MD",
									$zip 		   = "20781"
								) 
	{

		$this->address_line1 = $address_line1;
		$this->address_line2 = $address_line2;
		$this->city 		 = $city;
		$this->state 		 = $state;
		$this->zip 		     = $zip;
	}

	/**
	* getting shipping address line one
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getAddress1() 
	{
		return $this->address_line1;
	}

	/**
	* getting shipping address line two
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getAddress2() 
	{
		return $this->address_line2;
	}

	/**
	* getting shipping address city
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getCity() 
	{
		return $this->city;
	}

	/**
	* getting shipping address State
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getState() 
	{
		return $this->state;
	}

	/**
	* getting shipping address zip
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getZip() 
	{
		return $this->zip;
	}
}

?>