<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function auth_login()
    {
    //    print_r($_POST);die;
        $model = new RegisterModel();

        $session = \CodeIgniter\Config\Services::session();
        // $model = new Loginmodel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $model->checkCredentials(['email' => $email]);
        // print_r($user);die;
        if ($user) {
            if ($password === $user['password']) {
                $userData = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'password' => $user['password'],
                
                ];
                $session->set($userData);
                // print_r($userData);die;
                if ($user['role'] === 'customer') {
                    return redirect()->to(base_url('product'));
                }
                    elseif ($user['role'] === 'Admin') {
                        return redirect()->to(base_url('yourorder'));
                }
                elseif ($user['role'] === 'admin') {
                    return redirect()->to(('AdminDashboard'));
                } else {
                    session()->setFlashdata('error', 'Invalid credentials');
                    return redirect()->to('login');
                }
            } else {
                session()->setFlashdata('error', 'Invalid password');
                return redirect()->to('login');
            }
    
        } else {
            session()->setFlashdata('error', 'User not found');
            return redirect()->to('login');
        }
    }

    public function Employeedashboard()
    {
        echo view('Employee/Dashboard');
    }

    public function AdminDashboard()
    {
        echo view('Admin/Dashboard');
    }
    public function register()
    {

        
        echo view('register');
    }

    public function saveregister()
    {
        $db = \Config\Database::connect();
        $data = [
            
            // 'company_name' => $this->request->getPost('company_name'),
    
            'frist_name' => $this->request->getPost('frist_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'password'   => $this->request->getPost('password'),
            'role'       => $this->request->getPost('role'),
        ];
    
        // Insert data into the database table
        $db->table('tbl_register')->insert($data);
        return redirect()->to('login');
    }
    


    public function Add_company()
    {
        echo view('Admin/Addcompony');
    }
    public function Add_companynames()
    {
        // print_r($_POST);die;
        $db = \Config\Database::connect();
        $data = [
            
            'company_name' => $this->request->getPost('company_name'),
        ];
     
        // Insert data into the database table
        $db->table('tbl_company_master')->insert($data);
        return redirect()->to('Add_submenu');
    }
}