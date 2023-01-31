<?php

    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Clientes;

    class ClientesController extends Controller
    {

        public function index(){
            $data['clientes']= Clientes::all();
            return view('clientes', $data);
        }
        
        public function getClientes($id){
            echo $id;
        }
    }

?>