<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Vehiculo;
class Vehiculos extends Controller{
    //muestra con un array todos los elementos de la tabla 
    public function index(){
       
        $vehiculo = new Vehiculo();
       
        $datos['chonita']=$vehiculo->findAll();
       
        return view('listarVehiculo' , $datos);
    }

    //nos lleva al formulario para ingresar datos 
   
    public function agregarvehiculos(){
        return view('agregarVehiculo');
    }
    
    //agrega los datos a la base de datos 
   
    public function guardarVehiculos1(){
      
        $datos=[
           'placa'=> $this->request->getVar('txtplaca'),
           'precio'=>$this->request->getVar('txtprecio'),
           'marca'=>$this->request->getVar('txtmarca'),
           'fechacompra'=>$this->request->getVar('txtfechacompra')
        ];
      
       $vehiculo = new Vehiculo();
       $vehiculo->insert($datos);
       

       echo "datos almacenados con exito";

    }

    public function borrarVehiculos(){
            
        $vehiculo = new Vehiculo();
       
        $datos['chonita']=$vehiculo->findAll();
       
        return view('borrarVehiculo' , $datos);
    }

    public function vehiculosBorrados(){
       // $id = $this->request->getVar('txtid');
        // echo  "el dato es " . $id;
        
        $vehiculo = new Vehiculo();
        $datos=$vehiculo->where('id', $txtid)->first();
        $datos->where('id', $txtid)->delete($id);

        echo "ID Eliminado ";

    }

}