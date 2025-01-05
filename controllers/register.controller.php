<?php
// register.controller.php
require_once __DIR__ . '/../models/register.model.php';

class RegisterController
{
    public function registerUser()
    {
        if (isset($_POST['name'], $_POST['email'], $_POST['password']) &&
            $_POST['name'] != '' && $_POST['email'] != '' && $_POST['password'] != '') {

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo json_encode(["message" => "Invalid email format."]);
                http_response_code(400); 
                return;
            }

            $model = new RegisterModel();
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];

            if ($model->emailExists($email)) {
                echo json_encode(["message" => "Email already exists."]);
                http_response_code(409); 
                return;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $success = $model->createUser($name, $email, $hashedPassword);

            if ($success) {
                echo json_encode(["message" => "User registered successfully."]);
                http_response_code(201); 

                header("Location: login");
                exit;
            } else {
                echo json_encode(["message" => "Failed to register user."]);
                http_response_code(500);
            }


        }
    }
}

?>