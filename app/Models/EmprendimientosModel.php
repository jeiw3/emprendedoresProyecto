<?php

namespace App\Models;

use CodeIgniter\Model;

class EmprendimientosModel extends Model
{
    protected $table            = 'emprendimientos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre','slogan','categoria','descripcion','zona','telefono','horario','ubicacion','nomcarpeta'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

}
