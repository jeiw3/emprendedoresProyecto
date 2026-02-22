<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiciosModel extends Model
{
    protected $table            = 'serviciosemps';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_emp,servicio'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;


}
