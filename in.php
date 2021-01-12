<?php

//Printing the required output.
function getPizza($pizzaType,$customer){
    $Customer = ucfirst($customer); //Getting customer name.
    $Adress = getAdress($customer); //Getting customer address.
    $Price = getPrice($pizzaType); //Getting the pizza cost.
	
    //Required output:
    echo 'Making  a  new order..!!!.<br>';
    echo "A  delicious{$pizzaType} pizza should be sent to {$Customer} <br>";
    echo "The adress: {$Adress}<br>";
    echo "The bill is €{$Price}<br>";
    echo "Order finished.<br><br>";
}

//Selecting and returning the address.Depending on the customer name from order(), address is returned.
function getAdress($customer){
	switch ($customer){
		case 'koen' :
			return 'a yacht in Antwerp';
		case 'manuele':
			return 'Somewhere in Belgium';
		case 'students' : 
			return 'BeCode Office';
		default :
		 	return 'unknown Error wing said it ';
	}
}

//Selecting and returning the pizza type with cost. Depending on the pizza type from order(), cost is returned.
function getPrice($pizzaType){
	switch($pizzaType ){
		case'marguerita' :
			return '5';
		case 'golden':
			return '100';
		case 'calzone':
			return'10';
		case 'hawai':
			throw new Exception('No pineapple on pizza allowed !!!!');
		default :
			return 'On its Way to you !!!';
	}
	return 20;
}

//Calling function with pizza type and the customer.
function order(){
	getPizza('calzone','koen');
	getPizza('marguerita','manuele');
	getPizza('golden','students');
};

//Invoking the order().
order ();
?>
