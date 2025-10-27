<?php

namespace App\Models;

use CodeIgniter\Model;

class Contact extends Model
{
    protected $table            = 'contact';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['phone', 'email'];
}
