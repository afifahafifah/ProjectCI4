<?php namespace App\Controllers;

class Gate extends BaseController
{
    public function admin(){
        return view('gate/admin');
    }
	public function index()
	{
		return view ('gate/login');
    }
    
    public function fungsi_login(){
        $email= $this->request->getVar('email');
        $password= $this->request->getVar('password');
        if($email=="afifah200200@gmail.com"&&$password=="admin")
        {
            return redirect()->to('Helloworld/show');
        }else{
            return redirect()->to('/gate');
        }
    }
    
    public function register(){
        return view('gate/register');
    }
}
