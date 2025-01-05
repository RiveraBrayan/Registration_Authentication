<?php
require_once __DIR__ . '/../models/login.model.php';

class LoginController {
    public function loginUser() {
        if (isset($_POST['email'], $_POST['password']) && 
            $_POST['email'] != '' && $_POST['password'] != '') {
            
            $email = $_POST['email'];
            $password = $_POST['password'];

            $model = new LoginModel();
            $user = $model->getUserByEmail($email);

            if ($user) {
                if (password_verify($password, $user['password_user'])) {
                    session_start();
                    $_SESSION['user'] = [
                        'id_user' => $user['id_user'],
                        'name_user' => $user['name_user'],
                        'email_user' => $user['email_user']
                    ];

                    http_response_code(200); 
                    echo json_encode(["message" => "Login successful."]);

                    header("Location: home");
                    exit;
                } else {
                    http_response_code(401); 
                    echo json_encode(["message" => "Invalid password."]);
                }
            } else {
                // Usuario no encontrado
                http_response_code(404); 
                echo json_encode(["message" => "User not found."]);
            }
        }
    }
}