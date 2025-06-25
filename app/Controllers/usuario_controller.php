<?php
namespace App\Controller;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller;

public function_contruct(){

    helper([´form´,´url´]);


public function create(){
    $dato[´titulo´]=´registro´;
    echo view(´front/register´);
   


public function formValidation(){

$input = $this->validate( [   
    ´nombre´ => ´required|min_lenght[3]´,
     ´apellido´ => ´required|min_lenght[3]|max_lenght[25]´,
      ´usuario´ => ´required|min_lenght[3]´,
       ´email´ => ´required|min_lenght[4]|max_lenght[100]|valid_email|is_unique[usuarios.email]´,
        ´pass´ => ´required|min_lenght[3]|max_lenght[10]´,
],       
);

$formModel = new usuario_Model();
if(!$input){
    $data[´titulo´]=´Registro´;
    echo view(´front/register´,[´´validation =>$this ->validator ]);
}else{
    $formModel->save([
   
   ´nombre´ => $this ->request->getVar(´Nombre´),
   ´apellido´ => $this ->request->getVar(´Apellido´),
   ´usuario´ => $this ->request->getVar(´Usuario´),
   ´email´ => $this ->request->getVar(´Correo Electronico´),
   ´pass´ =>password_hash( $this ->request->getVar(´Contrseña´),PASSWORD_DEFAULT),
 ]);


session()   ´nombre´ -> setFlashdata(´success´,´Usuario registrado con exito´);
return $this-> response-> redirect(´/loger´);

}
}
}
