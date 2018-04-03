<?php
/**
 * Created by PhpStorm.
 * Users: sohail
 * Date: 1/25/2018
 * Time: 7:36 PM
 */
class Users extends BaseController
{
    public function __construct()
    {
        // if (!isLogedIn()) {
        //     redirect('Users/login');
        // }
 
        $this->userModel = $this->model('User');

    }

    //loading our page
    public function dashBoard()
    {

        

            //init data
            $data = [
                'username' =>'jin'
               ];

            //load view
            $this->view('Users/dashBoard', $data);

       
    }

    public function login()
    {

        //check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];

            //Validate email
            if (empty($data['username'])) {

                $data['usernameError'] = 'Please enter the email';
            }

            //Validate pass
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter the password';
            }



            //make sure that erros should be empty
            if(empty($data['usernameError']) && empty($data['passwordError']))       
            {


                //validated
                //check and set logged in user
                 $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                //  echo 'lol';
                //  print_r($loggedInUser);
               

                if ($loggedInUser)
                {  
                    $_SESSION['username'] = $data['username'];
                    //create a session
                    $this->createUserSession($loggedInUser);

                }
                else
                {
                    $data['passwordError'] = 'Password incorrect ';
                    $this->view('Users/login', $data);
                }
          
            }
            else
            {
                print_r("erors");
                //load view with errors
                $this->view('Users/login', $data);
            }

        } else {
            //init data
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''];

            //load view
            $this->view('Users/login', $data);

        }
    }

    public function createUserSession($loggedInUser)
    {
      
        redirect('Users/dashBoard');
    }

    public function logout()
    {
        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        redirect('Users/login');
    }


}