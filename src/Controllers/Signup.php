<?php
    namespace App\Controllers;
    use App\View;
    use App\App;
    use App\Models\User;
    use App\Models\Category;

    session_start();
    class Signup{
        public function index():string{
            return View::make('signup/index');
        }
        
        public function create():string{
            $user = new User();
            $category = new Category();
            $email = htmlentities($_POST['userEmail']);
            $password = htmlentities($_POST['userPassword']);
            $username = htmlentities($_POST['userName']);
            $user_surname = htmlentities($_POST['userSurname']);
            $selected_category = $category->getCategory(htmlentities($_POST['category']));
            
            if($user->createUser($email, password_hash($password, PASSWORD_DEFAULT), $username, $user_surname, $selected_category) == 0){
                return View::make("/signup/error");
            }
            $_SESSION['user_mail'] = $email;      
            $_SESSION['user_role'] = 'user';  
            return View::make('success', ['response_code' => 'Registrazione avvenuta con successo', 'url' => '/dashboard']);
        }
    }