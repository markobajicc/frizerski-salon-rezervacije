<?php


class SignupContr extends Singup{


    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;


    public function __construct($uid, $pwd , $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;


    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location: /frizerski_salon/index.php?error=stmtfailed");
            exit();
        }
        if($this->invalidEmail() == false){
            header("location: /frizerski_salon/index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            header("location: /frizerski_salon/index.php?error=passwordMatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            header("location: /frizerski_salon/index.php?error=usernameoremailtaken");
            exit();
        }

        $this->setUser($this->uid,$this->pwd,$this->email);
       
    }

    private function emptyInput(){
        $result = false;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result = false;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))
            $result=false;
        else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result = false;
        if($this->pwd !==$this->pwdrepeat){
            $result= false;
        }
        else{
            $result= true;
        }
        return $result;
    }
    private function uidTakenCheck(){
        $result = false;
        if(!$this->checkUser($this->uid, $this->email)){
            $result= false;
        }
        else{
            $result= true;
        }
        return $result;
    }


}