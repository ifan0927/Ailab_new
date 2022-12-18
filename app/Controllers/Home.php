<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Comment;

class Home extends BaseController
{
    public function index()
    {
        session_start();
        if(!isset($_SESSION['user']))
        {
            return redirect()->to('Home/login_page');
        }
        else{
            return view('page/index');
        } 
    }

    public function login()
    {
        session_start();
        $model = new User();
        $data = $model->FindAll();

        foreach($data as $data_item){ 
            $id = $data_item['id'];
            $username = $data_item['USERNAME'];
            $password = $data_item['PASSWORD'];
           
            if ($id!=""){
                if ($password == $_POST["pwd"] && $username == $_POST["usr_name"]){
                    $user_info=[
                        $_SESSION["user"]=$username,
                    ];

                   //echo "登入成功!!!!";
                   return redirect()->to('Home/index');                        

                }
              }
        }
        return view('errors/loginerror');

         
       //echo "Operation done successfully\n";
         $model->close();
    }

    public function login_page()
    {
        $model = new User();
        $data=[
            'users' =>$model->findAll()
        ];
        return view('Login/login_page',$data);
    }
    
    public function logout() //登出功能
    {
        session_start();
        $_SESSION['user'] = NULL;
        unset($_SESSION['user']);
        return view('Login/login_page');
    }

    public function smarthome()
    {
        session_start();
        if(!isset($_SESSION['user']))
        {
            return redirect()->to('Home/login_page');
        }
        else{
            return view('page/smarthome');
        } 
    }

    public function fishtank()
    {
        session_start();
        if(!isset($_SESSION['user']))
        {
            return redirect()->to('Home/login_page');
        }
        else{
            return view('page/fishtank');
        } 
    }

    public function comment_save()
    {
        $model = new Comment();

        $db = db_connect();
        $query = $db->query('SELECT * FROM COMMENTS');
        $count = $query->getNumRows();

        $data = [
            'title' => $this->request->getVar('title'),
            'comment' => $this->request->getVar('commentt'),
        ];
        
        if ($count == 5)
        {
            $data = [
                'id' => 5,
                'title' => $this->request->getVar('title'),
                'comment' => $this->request->getVar('commentt'),
            ];
            
        }
        $YN = $model->save($data);

    }
}
