<?php
class order{
	private $order_ID;
	private $F_ID;
	private $foodname;
	private $price;
	private $quantity;
	private $order_date;
	private $username;
	private $R_ID;

	function __construct($F_ID, $foodname, $price, $quantity, $order_date, $username, $R_ID){
		$this->F_ID = $F_ID;
		$this->foodname = $foodname;
		$this->price = $price;
		$this->quantity = $quantity;
		$this->order_date = $order_date;
		$this->username = $username;
		$this->R_ID = $R_ID;
	}

	function getorder_ID(){
		return $this->order_ID;
	}
	function getF_ID(){
		return $this->F_ID;
	}
	function getfoodname(){
		return $this->foodname;
	}
	function getprice(){
		return $this->price;
	}
	function getquantity(){
		return $this->quantity;
	}
	function getorder_date(){
		return $this->order_date;
	}
	function getusername(){
		return $this->username;
	}
	function getR_ID(){
		return $this->R_ID;
	}




	function setorder_ID($order_ID){
		$this->order_ID = $order_ID;
	}
	function setF_ID($F_ID){
		$this->F_ID = $F_ID;
	}
	function setfoodname($foodname){
		$this->foodname = $foodname;
	}
	function setprice($price){
		$this->price = $price;
	}
	function setquantity($quantity){
		$this->quantity = $quantity;
	}
	function setorder_date($order_date){
		$this->order_date = $order_date;
	}
	function setusername($username){
		$this->username = $username;
	}
	function setR_ID($R_ID){
		$this->R_ID = $R_ID;
	}
}
?>