<?php 
namespace App\Controllers;
Use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

    public function __construct(){
        helper(['form','url']);
    }

    public function create()
         {
        $data['titulo']='Registro';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('back/usuario/registro');
        echo view('fronts/footer_view');
    }

    public function formValidation(){

        $input = $this->validate([
            'nombre'    => 'required|min_length[3]',
            'apellido'  => 'required|min_length[3]|max_length[25]',
            'correo'    => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.correo]',
            'usuario'   => 'required|min_length[3]',
            'contraseña'=> 'required|min_length[5]|max_length[16]',
        ],
    );
        $formModel = new usuario_model();
        
        if(!$input){
            $data['titulo']='Registro';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('fronts/footer_view');

        }else{
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),// HACIA LA DERECHA EL NOMBRE DE LOS CAMPOS DEL FORMULARIO
                'apellido' => $this->request->getVar('apellido'),
                'correo' => $this->request->getVar('correo'),
                'usuario' => $this->request->getVar('usuario'),
                'contraseña' => password_hash($this->request->getVar('contraseña'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con exito');
            return $this->response->redirect('/login.php');
        } 

    }
    
}

?>