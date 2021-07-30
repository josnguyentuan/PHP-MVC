<?php
namespace App\Controllers;
use App\Models\User;

class LoginController extends BaseController{
    public function loginForm(){
       // dd(password_hash('123456', PASSWORD_DEFAULT));
        $this->render('admin.auth.login');
    }
    public function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::where('email', $email)->first();
        if(!$user){
            header('location: ' . BASE_URL . 'login?msg=Tài khoản không tồn tại');
            die;
        }

        if(password_verify($password, $user->password)){
            $_SESSION['AUTH'] = [
                'id' => $user->id,
                'name' => $user->name,
                'role' => $user->role,
                'email' => $user->email
            ];
            header('location: ' . BASE_URL . '');
            die;
        }
        header('location: ' . BASE_URL . 'login?msg=Tài khoản/mật khẩu không đúng');
        die;
    }    
    public function logout(){
        unset($_SESSION['AUTH']);
        header('location: ' .BASE_URL);
    } 
}