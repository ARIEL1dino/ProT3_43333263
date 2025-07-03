<?php 
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;


class login_controller extends BaseController{

    public function index(){
        helper(['form','url']);

         $data['titulo']='Login';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('back/usuario/login');
        echo view('fronts/footer_view');
    }

    public function auth()//Funcion autorizar
    {
        $session = session();
        $model = new usuario_model();

        //traemos los datos del fomrulario
        $correo = $this->request->getVar('correo');
        $pass = $this->request->getVar('contraseña');

        $data = $model->where('correo', $correo)->first();
        if($data){
            $contraseña = $data['contraseña'];
            $ba = $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg','Usuario dado de baja');
                return redirect()->to('/login_controller');
            }
            //se verifican los datos ingresados para inmiciar sesion
            $verify_pass = password_verify($pass, $contraseña);

            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'], 'nombre' => $data['nombre'], 'apellido' => $data['apellido'],
                    'correo' => $data['correo'], 'usuario' => $data['usuario'], 'id_perfil' => $data['id_perfil'],
                    'logged_in' => TRUE
                ];

                //SI CUMPLE LA VERIFICACIÓN INICIA SESION
                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido');
                return redirect()->to('/panel');

            }else{
                session()->setFlashdata('msg', 'Contraseña Incorrecta');
                return redirect()->to('/login');
            }
        }else{
            session()->setFlashdata('msg', 'No existe el correo o es incorrecto');
                return redirect()->to('/login');
        }

    }
       
     public function logout()
     {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
     }   
    
}
?>