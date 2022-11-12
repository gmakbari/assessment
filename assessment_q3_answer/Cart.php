<?php

include('Item.php');
include('Customer.php');
include('ShippingAddress.php');

/**
*
* Description: Dealing with customer items and shipping details in one cart
*
* @version : 1.0.0
* @access public  
*/
class Cart
{

	private $items;

	public const SHIPPING_COST = 4.0;

	public function __construct(array $items)
	{
		$this->items = $items;
	}

	/**
	* getting customer items
	*
	* @param none
	* 
	* @return array
	*/ 
	public function getItems() 
	{

		$selected_items = [];
		$total 			= 0;

		if(! empty($this->items)) {
			foreach ($this->items AS $item) {

				$itemObject = new Item($item);

				$selected_items[$item]['name'] 	   = $itemObject->getName(); 
				$selected_items[$item]['price']    = $itemObject->getPrice(); 
				$selected_items[$item]['quantity'] = $itemObject->getQuantity(); 
				$selected_items[$item]['tax'] 	   = $itemObject->getTax();  
				$selected_items[$item]['shipping'] = self::SHIPPING_COST;
				$selected_items[$item]['subTotal'] = $itemObject->getTax() + $itemObject->getSubTotal() + self::SHIPPING_COST;

				$total 							   = $total + $itemObject->getSubTotal() + $itemObject->getTax() + self::SHIPPING_COST;
			}

			$selected_items['total_cost'] 		   = $total;

		} else {
			throw new Exception("No item requested", 1);
		}

		return $selected_items;
		
	}
}


$data_for_api = [];

//get customer details =================================//
$customer 						  	= new Customer();
$data_for_api['customer_name'] 	  	= $customer->getFullName();
$data_for_api['customer_address'] 	= $customer->getAddress();
//

//get shipping address =================================//
$shipping 						  	= new ShippingAddress();
$data_for_api['shipping_address1'] 	= $shipping->getAddress1();
$data_for_api['shipping_address2'] 	= $shipping->getAddress2();
$data_for_api['shipping_city'] 		= $shipping->getCity();
$data_for_api['shipping_state'] 	= $shipping->getState();
$data_for_api['shipping_zip'] 		= $shipping->getZip();
//

//get items from cart ===================================//
$cart 								= new Cart(array(1,3));
$data_for_api['order_items'] 		= $cart->getItems();

echo "<pre>"; print_r($data_for_api);

//call api to post the provided data=====================//
//postData($url,$data_for_api);

function postData($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

?>