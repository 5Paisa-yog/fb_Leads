<?php
//include ('FacebookAds/Object/Lead.php');
//use FacebookAds\Api;

// Initialize a new Session and instanciate an Api object
//Api::init($app_id, $app_secret, $access_token);

// The Api object is now available trough singleton
//$api = Api::instance();

//use FacebookAds\Object\Lead;
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'abc123') {
  echo $challenge;
}

error_log("$challenge = ".print_r($challenge, true));
error_log("$verify_token = ".print_r($verify_token, true));


$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));

$leadgen_id = $input["entry"][0]["changes"][0]["value"]["leadgen_id"];
error_log(print_r($leadgen_id,true));

//use FacebookAds\Object\Lead;
//$form = new Lead($leadgen_id);
//$form->read();
//error_log(print_r("LeadGen Details = ".$form,true));
