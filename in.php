<?php

function getPizza ($pizzaType,$customer){
	$Customer = ucfirst($customer);
    $Adress = getAdress($customer);
    $Price = getPrice($pizzaType);	

	echo 'Making  a  new order..!!!.<br>';
    echo "A  delicious{$pizzaType} pizza should be sent to {$Customer} <br>";
    echo "The adress: {$Adress}<br>";
    echo "The bill is €{$Price}<br>";
    echo "Order finished.<br><br>";
}
function getAdress($customer){
	switch ($customer){
		case 'koen' :
			return 'a yacht in Antwerp';
		case 'manuele':
			return 'Somewhere in Belgium';
		case 'students of Verou 1.26' : 
			return 'BeCode Office';
		default :
		 	return 'unknown Error wing said it ';
	}
}
function getPrice ($pizzaType){
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
}
function order (){
getPizza('calzone','koen');
getPizza('marguerita','manuele');
getPizza('golden','students ');
};
order ();













?>