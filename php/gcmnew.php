<?php
// Replace with real BROWSER API key from Google APIs
$apiKey = "AIzaSyBoHDIuLbLTVsXk3i54HpcMpgGmpPUAXqg";        /*API  KEY  */

// Replace with real client registration IDs 
//$registrationIDs = array($_REQUEST['regID']);
/*here all the register deices id will be come you will git this id when you run app and see log */ 
$registrationIDs = array('APA91bGx-tPUC5hVbkfiHNjbsZpavo4nUJXh56G3OFQ6WqiAou_wyM8sFvePNNAD-d67jnI4L1im6XdthcrgOd_YziEemnspi_ZmeWGg6WyYdpBabpJ_l_tmSqgCbcRYfFtbWuPSR88WdNVLTFF3FDQhqyr_QczqMA','APA91bFRzYXaxPMGv2SVKz83qJsKcFEJ6Y2A4pQcE4_jvvxM1lif-O_2lLNeuC382Aoib-PpxSDmFLwxs6djmHTRBxDMq4GaTSWvcuSK6tHhK4QeBjlYhUiBPOAnlrMS3Y4Gqis-mYoa');
// Message to be sent
$message = "x";


// Set POST variables
$url = 'https://android.googleapis.com/gcm/send';

$fields = array(
                'registration_ids'  => $registrationIDs,
                'data'              => array( "message" => $message ),
                );

$headers = array( 
                    'Authorization: key=' . $apiKey,
                    'Content-Type: application/json'
                );

// Open connection
$ch = curl_init();

// Set the url, number of POST vars, POST data
curl_setopt( $ch, CURLOPT_URL, $url );

curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

// Execute post
$result = curl_exec($ch);

// Close connection
curl_close($ch);

echo $result;


?>