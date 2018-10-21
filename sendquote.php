<?php
require('libs/btmn.mailer.php');

class Mailer extends BtmnMail {
    /**
     * --------------------------------------------------------------------------
     * Init the mailer.
     * Uncomment this method if you wish the add some required fields
     * --------------------------------------------------------------------------
     */
    /*function __construct($apiKey) {
        parent::__construct($apiKey);
        //$this->requiredFields[] = 'custom_field1';
//$this->requiredFields[] = 'custom_field1';
}*/

    /**
     * --------------------------------------------------------------------------
     * Validate the date before sending to API.
     * Uncomment this method if you wish the add some required fields
     * --------------------------------------------------------------------------
     */
    /*public function validate() {
    parent::validate()
    // write your custom validation if needed
    if ($...) {
    $this->sendError('you message');
    }
    }*/

    /**
     * --------------------------------------------------------------------------
     * Prepare the data before sending. Change the algorithm of this child method if necessary.
     * Uncomment this method if default behaviour needs to be changed.
     * --------------------------------------------------------------------------
     */
    protected function prepare() {
        $message_parts = array();

        $phone = $_POST['tel'];
        if ($phone) {
            $message_parts[] = sprintf("Téléphone : %s\n", $phone);
        }
        $company = $_POST['company'];
        if ($company) {
            $message_parts[] = sprintf("Company : %s\n", $phone);
        }
        $address = $_POST['address'];
        if ($phone) {
            $message_parts[] = sprintf("Address : %s\n", $address);
        }
        $city = $_POST['tel'];
        if ($city) {
            $message_parts[] = sprintf("City : %s\n", $city);
        }
        $province = $_POST['province'];
        if ($phone) {
            $message_parts[] = sprintf("Province : %s\n", $province);
        }
        $postal = $_POST['postal'];
        if ($phone) {
            $message_parts[] = sprintf("Postal Code : %s\n", $postal);
        }
        $preference = $_POST['preference'];
        if ($phone) {
            $message_parts[] = sprintf("Preference : %s\n", $preference);
        }
        $industry = $_POST['tel'];
        if ($industry) {
            $message_parts[] = sprintf("Industry : %s\n", $industry);
        }
        $promate = $_POST['promate'];
        if ($phone) {
            $message_parts[] = sprintf("Product and/or Material : %s\n", $promate);
        }

        parent::prepare($message_parts);
    }
}

define('API_KEY', 'b853fa02-61b9-45e2-8baf-97c444f84ae0');  // Set api Key here




/*
*     -//-  DO NO CHANGE FROM HERE  -//-
*/
$mail = new Mailer(API_KEY);
echo $mail->send();
