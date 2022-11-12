<?php 

/**
 *
 * Description: handling and manipulating items
 *
 * @version : 1.0.0
 * @access public  
 */

class Item 
{
	// static values as a sample
	public const TAX_RATE = 7;

	//sampe items
	private $items = [
						1 => [
								'name' 	   => 'Note Book',
								'price'    => 3.0,
								'quantity' => 2
							 ],
						2 => [
								'name' 	   => 'Candy Box',
								'price'    => 5.0,
								'quantity' => 3
							 ],
						3 => [
								'name' 	   => 'Shampoo',
								'price'    => 4.0,
								'quantity' => 1
							 ]
					 ];

	private $id,
	       	$name,
	       	$price,
	       	$quantity;

	public function __construct($id = 0) 
	{

		$this->id 		= $id;
		$this->name 	= $this->items[$id]['name'];
		$this->price 	= $this->items[$id]['price'];
		$this->quantity = $this->items[$id]['quantity'];
	}

	/**
	* getting the item's id
	*
	* @param none
	* 
	* @return integer
	*/ 
	public function getId() 
	{
		return $this->id;
	}

	/**
	* getting the item's name
	*
	* @param none
	* 
	* @return string
	*/ 
	public function getName() 
	{
		return $this->name;
	}

	/**
	* getting the item's price
	*
	* @param none
	* 
	* @return integer
	*/ 
	public function getPrice() 
	{
		return $this->price;
	}

	/**
	* getting the item's quantity
	*
	* @param none
	* 
	* @return integer
	*/ 
	public function getQuantity() 
	{
		return $this->quantity;
	}

	/**
	* calculating item's tax
	*
	* @param 
	* 
	* @return integer
	*/ 
	public function getTax() 
	{
		return (double) ($this->price * self::TAX_RATE / 100); 
	}

	/**
	* calculating subtotal
	*
	* @param 
	* 
	* @return integer
	*/ 
	public function getSubTotal() 
	{
		return (double) ($this->price * $this->quantity); 
	}

}


?>