<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table      = 'tbl_register'; // Replace with your table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['frist_name', 'last_name', 'email', 'password', 'role'];

    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function checkCredentials($where)
    {
        $user = $this->table('tbl_register') 
                     ->where($where)
                     ->first();
        if ($user) {
            return $user; 
        }
        return null; 
    }

    public function saveEmployee(array $employeeData)
    {
        // Insert data into the registration table
        if (!$this->insert($employeeData)) {
            return false; 
        }

        // Get the ID of the newly registered employee
        $registeredId = $this->getInsertID();

        // Add the registered ID to the employee data
        $employeeData['registered_id'] = $registeredId;

        // Switch to the employees table
        $this->setTable('tbl_employees');

        // Define the allowed fields for the employees table
        $this->setAllowedFields([
            'registered_id', 'frist_name', 'last_name', 'email', 'password', 'mobile', 'present_address', 'permanent_address',
            'account_no', 'ifsc_code', 'aadhar_no', 'gross_salary', 'company_name', 'department',
            'pf_no', 'esi_no', 'employee_photo', 'aadhaar_photo', 'passbook_photo','dob'
        ]);

        // Insert the data into the employees table
        if (!$this->insert($employeeData)) {
            return false; 
        }

        return true; 
    }
}