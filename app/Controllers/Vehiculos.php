<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Vehiculo;
class Vehiculos extends Controller{
  
  
    public function inicioSecion(){
        return view('inicioSesion');
   }

   public function iniciarSesion(){
       $usuario = $this->request->getVar('txtusuario');
       $contra = $this->request->getVar('txtcontra');

      if ($contra = '1234' and $usuario='Parcial') {
          return view('listar');
      } else {
        return view('inicio');
      }
      

   }
   
   
   
   
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
       

       return $this->response->redirect(site_url('listar'));

    }

    public function borrarVehiculos(){
            
        $vehiculo = new Vehiculo();
       
        $datos['chonita']=$vehiculo->findAll();
       
        return view('borrarVehiculo' , $datos);
    }

    public function borrarVehiculo($id=null){
      
        $vehiculo = new Vehiculo();
        $datos=$vehiculo->where('id',$id)->first();
        $vehiculo->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('listar'));
        
    }

    public function editarVehiculo($id=null){
        echo $id;
      
        $vehiculo = new Vehiculo();
      
        $datose['vehiculo']=$vehiculo->where('id',$id)->first();
      
        return view('editarVehiculo', $datose);
    }

    public function actualizarVehiculo(){
        $vehiculo = new Vehiculo();
        $datos=[
            'placa'=> $this->request->getVar('txtplaca'),
            'precio'=>$this->request->getVar('txtprecio'),
            'marca'=>$this->request->getVar('txtmarca'),
            'fechacompra'=>$this->request->getVar('txtfechacompra')
         ];
         $id= $this->request->getVar('id');
         $vehiculo->update($id,$datos);

         return $this->response->redirect(site_url('listar'));

        
    }


}