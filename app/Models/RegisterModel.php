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
}
