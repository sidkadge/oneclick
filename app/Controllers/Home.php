<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function Employeedashboard()
    {
        echo view('Employee/Dashboard');
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

