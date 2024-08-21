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
       
        if (!$this->insert($employeeData)) {
            return false; 
        
        $registeredId = $this->getInsertID(); 
      
        $employeeData['registered_id'] = $registeredId;
        $this->setTable('tbl_employees');

        $this->setAllowedFields([
            'registered_id', 'frist_name', 'last_name', 'email', 'password' ,'mobile', 'present_address', 'permanent_address',
            'account_no', 'ifsc_code', 'aadhar_no', 'gross_salary', 'company_name', 'department',
            'pf_no', 'esi_no', 'employee_photo', 'aadhar_card_photo', 'account_passbook_photo'
        ]);

        if (!$this->insert($employeeData)) {
            return false; 
        }

        return true; 
    }

}
}