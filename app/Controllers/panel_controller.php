<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class panel_controller extends Controller{
 public function index(){

    $session = session();
    $nombre = $session->get('usuario') ;
    $perfil = $session->get('id_perfil') ;

    $session = session();
if (!$session->has('usuario') || !$session->has('id_perfil')) {
    return redirect()->to('/login'); // Redirigir si no está autenticado
}
     $data['id_perfil']=$perfil;

        $data['titulo']='panel del usuario';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('back/usuario/usuario_logueado');
        echo view('fronts/footer_view');
    }

}