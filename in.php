<?php

function getPizza ($pizzaType,$customer){
	 getAdress($customer);
	 getPrice($pizzaType);
	

	 echo 'create new ordrer .<br>' ;
	 echo " a  $pizzaType pizza should be send to $customer .<br>";
	 echo " The adress :  .<br>" ;
	 

}

function getAdress($customer){
	switch ($customer){
		case 'Koen' :
			return 'a yacht in Antwerp';
		case 'Manuele':
			return 'Somewhere in Belgium';
		case 'Students' : 
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