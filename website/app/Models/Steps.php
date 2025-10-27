<?php

namespace App\Models;

use CodeIgniter\Model;

class Steps extends Model
{
    protected $table            = 'steps';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['step','description','title'];
}
