<?php 
namespace App\Models;

use CodeIgniter\Model;

class Vehiculo extends Model{
    protected $table      = 'vehiculos';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primaryKey ='id';
    protected $allowedFields=['placa','precio','marca','fechacompra'];

}