<?php
//header ('Content-type : text/plain');

//Reads the variables sent via POST

$sessionId = $_GET ['sessionId'];

$serviceCode = $_GET['serviceCode'];

$text = $_GET ['text'];

//first menu of the screen

if ($text == ""){

    $response = "CON Hi welcome, I can help you with Event Reservation \n";

    $response .= "Enter 1 to continue ";

}

//menu for a user who selects '1' from the first menu
//will be brought to this second menu screen

else if ($text == "1"){

    $response = "CON Pick a table for reservation below \n";

    $response .= " 1. Table for 2 \n";

    $response .= " 2. Table for 4 \n";

    $response .= " 3. Table for 6 \n";

    $response .= " 4. Table for 8 \n";

}

//menu for a user who selects 1 from the second menu above 
//will be brought to the third menu screen below

else if ($text == "1*1"){

    $response = "CON You are about to book a table for 2 \n";

    $response .= "Please enter 1 to continue \n";

}

else if ($text == "1*1*1"){

    $response = "CON Table for 2 costs - Kshs - 5000.00 \n";

    $response .= "Enter 1 to continue \n";

    $response .= "Enter 0 to cancel \n";
}

else if ($text == "1*1*1*1"){

    $response = "END Your table reservation for two has been booked \n";

}

else if ($text == "1*1*1*0"){

    $response = "END Your table reservation for two has been cancelled \n";
}


//menu for a user who has selected 2 from the second menu above
//will be brought to this fourth menu screen

else if ($text == "1*2"){

    $response = "CON You are about to book a table for 4 \n";

    $response .= "Please enter 1 to confirm \n";

}

//menu for a user who selects 1 from the fourth menu above 

else if ($text == "1*2*1"){

    $response = "Table for 4 costs - Kshs 7500 - \n";

    $response .= "Enter 1 to continue \n";

    $response .= "Enter 0 to cancel \n";

}

else if ($text == "1*2*1*1"){

    $response = "END Your table reservation for 4 has been booked \n";

}

else if ($text == "1*2*1*0"){

    $response = "END Your table reservation for 4 has been cancelled \n";
}


//menu for a user who selects 3 from the second menu above 
//will be brought to the fifth menu screen below.

else if ($text == "1*3"){

    $response = "CON You are about to book a table for 6 \n";

    $response .= "Please enter 1 to confirm \n";

}

else if ($text == "1*3*1"){

    $response = "Table for 6 costs - Kshs 10,000 - \n";

    $response .= "Enter 1 to continue \n";

    $response .= "Enter 0 to cancel \n";

}

else if ($text == "1*3*1*1"){

    $response = "END Your table reservation for 6 has been booked \n";

}

else if ($text == "1*3*1*0"){

    $response = "END Your table reservation for 6 has been cancelled \n";
}



//menu for a user who has selected 4 from the second menu screen above 
//will be brought to the sixth menu screen below

else if ($text == "1*4"){

    $response = "CON You are about to book a table for 8 \n";

    $response .= "Please enter 1 to confirm \n";

}

else if ($text == "1*4*1"){

    $response = "Table for 8 costs - Kshs 13,000 - \n";

    $response .= "Enter 1 to continue \n";

    $response .= "Enter 0 to cancel \n";

}

else if ($text == "1*4*1*1"){

    $response = "END Your table reservation for 8 has been booked \n";

}

else if ($text == "1*3*1*0"){

    $response = "END Your table reservation for 8 has been cancelled \n";

}

//echo response 


echo $response ;

//postman link : http://localhost/USSD/Ussdapp.php?sessionId=123&text=&serviceCode=*384*1904199# using POST
/**
 * $sessionId: This generates a unique value when the session starts and sent 
 * every time a mobile subscriber response has been received.
 * $serviceCode: This refer to your USSD code
 * $text: This shows the user input. which is an empty string in the first notification 
 * of a session which after that concatenates all the user input within the session 
 * until the session ends.
 * $response: This hold the answer to the user input.
 * echo: Prints out the response for the user to read.
 * CON: It means an intermediate menu Or that the session is CONtinuing
 * END: Means the final menu and will trigger session termination i.e session is ENDing.
 */
?>