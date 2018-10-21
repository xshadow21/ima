<?php
abstract class BtmnMail {
    private $apiKey = '';
    private $data = array();
    protected $requiredFields = array('email', 'message');

    public function __construct($apiKey) {
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            http_response_code(400);
            echo json_encode(array('detail' => 'Method not allowed'));
            exit();
        }

        $this->apiKey = $apiKey;
    }

    private function sendmail() {
        $url = 'https://api.batman.io/v2/clients/send-mail/';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->data);
        //curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            sprintf('X-bms-key: %s', $this->apiKey)
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        http_response_code($httpcode);
        return $result;
    }

    public function sendError($message) {
        http_response_code(400);
        echo json_encode(array('detail' => $message));
        exit();
    }

    public function cleanInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function send() {
        $this->validate();
        $this->prepare();
        return $this->sendmail();
    }

    protected function prepare($message_parts=array()) {
        $message = join("\n", $message_parts);
        $message .= "\n" . $this->cleanInput($_POST['message']);

        $this->data = array(
            'email' => $this->cleanInput($_POST['email']),
            'message' => $message,
        );

        $name = $this->cleanInput($_POST['name']);

        if ($name) {
            $this->data['name'] = $name;
        }

        $subject = $this->cleanInput($_POST['subject']);

        if ($subject) {
            $this->data['subject'] = $subject;
        }

        $debug = array_key_exists('debug', $_POST) ? intval($_POST['debug']) : 0;

        if ($debug === 1) {
            $this->data['debug'] = $debug;
            $this->data['email_tester'] = $_POST['email_tester'];
        }
    }

    protected function validate() {
        // Check if required fields are empty
        foreach ($this->requiredFields as $field) {
            if (!$_POST[$field]) {
                $this->sendError(sprintf('Field %s is missing or empty', $field));
            }
        }

        // Check if email is valid
        if (!$this->validateEmail($_POST['email'])) {
            $this->sendError(sprintf('Invalid email address'));
        }
    }
}
