<?php

    // include 'includes/user_token.php';
    include 'myfirebase.php';

    if(isset($_POST['signin'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if($username != null){
            if($password != null){
                $reference = 'Admin/'.$username;
                $checkdata = $database->getReference($reference)->getValue();
                if($checkdata != null){
                    if($password != null)
                    {


                        //ambil data
                        $password_admin_saat_ini = $checkdata['password'];

                        if($password == $password_admin_saat_ini) {
                            //jawaban benar
                            session_start();
                            $_SESSION['username'] = $username;
                            header('location: ../dashboard.php');
                        }

                        else {
                            echo 'Password Salah';
                        }

                        
                    }
                    else {
                        echo 'password salah!';
                    }
                }
                else {
                    echo 'data tidak ada!';
                }
            }
        }
    }
