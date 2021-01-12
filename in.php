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
		case 'bert' :
            		try{
                		echo 'No pizza for you Bert!!!!<br>';
                		throw new Exception();
            		}catch(Exception $e){
                		echo 'Banana on Pizza is allowed!!!<br>';
            		}
            		finally{
                		echo 'Thank you!<br>';
           		}
            		break;
		default :
		 	return 'unknown Error wing said it ';
    }
    return 'BeCode is my home';
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
			try{
                		echo 'No pineapple on pizza allowed !!!!<br>';
                		throw new Exception();
            		}catch(Exception $e){
                		echo 'Not allowed!<br>';
            		}
            		finally{
                		echo 'Please choose a proper combination<br>';
                		echo '<br>';
            		}
            		break;
		default :
			return 'On its Way to you !!!';
    }
    return '0';
}

//Calling function with pizza type and the customer.
function order(){
	getPizza('calzone','koen');
	getPizza('marguerita','manuele');
	getPizza('golden','students');
	getPizza('hawai','bert');
    getPizza('','');
};

//Invoking the order().
order ();
?>
