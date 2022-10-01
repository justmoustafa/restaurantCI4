<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    //protected $primaryKey = 'id';

    //protected $useAutoIncrement = true;

    protected $returnType = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email','subject','message'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}