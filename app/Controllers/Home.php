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
        $session = \Config\Services::session();
        if (!$session->has('id')) {
            return redirect()->to('/');
        }
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
        $session = \Config\Services::session();
        if (!$session->has('id')) {
            return redirect()->to('/');
        }
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
        return redirect()->to('Add_company');
    }
    public function logout()
{
    $session = session();
    // session_destroy();
    $session->destroy();
    // print_r($_SESSION);die;
    return redirect()->to('/');
}
public function Add_Employee(){
    
  echo view('Admin/Add_Employee');

}
public function saveEmployee()
{
    $db = \Config\Database::connect();
    $registerModel = new RegisterModel();
    $email = $this->request->getPost('email');

    // Check if email already exists
    if ($registerModel->where('email', $email)->first()) {
        return redirect()->back()->withInput()->with('error', 'Email already exists');
    }

    $uploadPaths = [
        'employee_photo' => 'public/uploads/photos/',
        'aadhaar_photo' => 'public/uploads/aadhar/',
        'passbook_photo' => 'public/uploads/passbooks/',
    ];

    $employeeData = [
        'frist_name' => $this->request->getPost('frist_name'),
        'last_name' => $this->request->getPost('last_name'),
        'email' => $this->request->getPost('email'),
        'mobile' => $this->request->getPost('mobile'),
        'present_address' => $this->request->getPost('present_address'),
        'permanent_address' => $this->request->getPost('permanent_address'),
        'account_no' => $this->request->getPost('account_number'),
        'ifsc_code' => $this->request->getPost('ifsc_code'),
        'aadhar_no' => $this->request->getPost('aadhaar_number'),
        'gross_salary' => $this->request->getPost('gross_salary'),
        'company_name' => $this->request->getPost('company_name'),
        'department' => $this->request->getPost('department'),
        'pf_no' => $this->request->getPost('pf_no'),
        'esi_no' => $this->request->getPost('esi_no'),
        'dob' => $this->request->getPost('dob'),
    ];

    $uploads = ['employee_photo', 'aadhaar_photo', 'passbook_photo'];

    foreach ($uploads as $fileKey) {
        $file = $this->request->getFile($fileKey);

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move($uploadPaths[$fileKey], $newName);
            $employeeData[$fileKey] = $newName; 
        } else {
            $employeeData[$fileKey] = null; 
        }
    }
   
    // Prepare data array for registration
    $registerData = [
        'frist_name' => $this->request->getPost('frist_name'),
        'last_name' => $this->request->getPost('last_name'),
        'email' => $this->request->getPost('email'),
        'password' => $this->request->getPost('password'),
        'role' => 'employee' 
    ];

    // Insert registration data into tbl_register and get the ID
    $db->table('tbl_register')->insert($registerData);
    $registeredId = $db->insertID();  // Get the inserted ID

    // Set registered_id in employee data
    $employeeData['registered_id'] = $registeredId;

    // Insert employee data into tbl_employees
    $db->table('tbl_employees')->insert($employeeData);

    return redirect()->to('Add_Employee');
}




}