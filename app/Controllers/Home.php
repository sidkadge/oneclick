<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function Employeedashboard()
    {
        echo view('Employee/Dashboard');
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
