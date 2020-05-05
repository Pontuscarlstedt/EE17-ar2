<?php
/**
* PHP version 7
* @category   OOP
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
class Validator
{
    private $data;

    private $errors = [];

    private $fields = ['username', 'email', 'password'];
    
    public function set($postdata)
    {
        $this->data = $postdata;
    }

    public function validateForm()
    {
        foreach ($this->fields as $field) {

            /* Kontrollerar om obligatoriska fälten finns med i POST-data */
            if (!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validateUsername();
        $this->validatePassword();
        $this->validateEmail();

        

    }

    public function showErrors($key)
    {
        if (array_key_exists($key, $this->errors)) {
            foreach ($this->errors[$key] as $error) {
                echo "$error<br>";
            }
        }
        
    }

    private function validateUsername()
    {
        $username = trim($this->data["username"]);

        $username = filter_var($username, FILTER_SANITIZE_STRING);

        if (empty($username)) {
            $this->addError("username", "Username cannot be empty");
        } else {
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $username)) {
                $this->addError("username", "Username must contain 6-12 chars or numbers");
            } 
        }
        
    }
    private function validatePassword()
    {
        $password = trim($this->data["password"]);

        $password = filter_var($password, FILTER_SANITIZE_STRING);

        
        if (empty($password)) {
            $this->addError("password", "Password cannot be empty");
        } else {
            if (!preg_match("/[A-ZÅÄÖ]/", $password) > 0) {
                $this->addError("password", "Password must contain least one uppercase character");
            }
            /* Skall innehålla minst en liten bokstav */
            if (!preg_match("/[a-zåäö]/", $password) > 0) {
                $this->addError("password", "Password must contain least one lowercase character");
            }
            /* Skall innehålla minst en siffra */
            if (!preg_match("/[0-9]/", $password) > 0) {
                $this->addError("password", "Password must at least contain one number");
            }
            /* Skall innehålla minst ett specialtecken: #%&¤_*-+@!?()[]$£€ */
            if (!preg_match("/[#%&¤_\*\-\+\@\!\?\(\)\[\]\$£€]/", $password) > 0) {
                $this->addError("password", "Password must contain at least one special character");
            }
            /* Skall vara minst 8 tecken */
            if (!preg_match("/^.{8,40}$/", $password) > 0) {
                $this->addError("password", "Password must be beetween 8 and 40 character long");
            }

        }
    }
    private function validateEmail()
    {
        $email = trim($this->data["email"]);

        $email = filter_var($email, FILTER_SANITIZE_STRING);

        if (empty($email)) {
            $this->addError("email", "Email cannot be empty");
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->addError("email", "Email must be a valid email");
            }
           
        }
    }

    private function addError($key, $message)
    {
        $this->errors[$key][] = $message;
    }
}
