<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup              = 'food';
    protected $table                = 'usuarios';
    protected $returnType           = 'object';
    protected $useSoftDeletes       = true;
    protected $allowedFields        = ['name', 'email', 'telefone'];
}
