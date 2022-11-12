<?php

/**
*
* Description: handling and manipulating Customer details
*
* @version : 1.0.0
* @access public  
*/
class Customer 
{

	private $first_name,
	       	$last_name,
	       	$address;

	public function __construct(
								$first_name = "John", 
								$last_name 	= "Doe", 
								$address 	= "5131 Kenl"
								) 
	{

		$this->first_name 	= $first_name;
		$this->last_name 	= $last_name;
		$this->address 		= $address;
	}

	/**
	* getting customer first name
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getFirstName() 
	{
		return $this->first_name;
	}

	/**
	* getting customer last name
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getLastName() 
	{
		return $this->last_name;
	}

	/**
	* getting customer fullname
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getFullName() 
	{
		return $this->first_name ." ".$this->last_name;
	}

	/**
	* getting customer address
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getAddress() 
	{
		return $this->address;
	}
}

?>