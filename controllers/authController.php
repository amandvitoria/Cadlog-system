<?php
require_once 'models/user.php';
 
class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
 
            $user = User::findByEmail($email);
 
            if ($user && password_verify($senha, $user['senha'])) {
                session_start();
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil'] = $user['perfil'];
 
                header('Location: index.php?action=dashboard');
            } else {
                // Passa a mensagem de erro para a página de login
                $error_message = "Email ou senha incorretos";
                include 'views/login.php';  // Recarrega a página de login e exibe a mensagem
            }
        } else {
            include 'views/login.php';
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: index.php');
    }
}
?>
