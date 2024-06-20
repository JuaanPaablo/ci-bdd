<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    
    public function Returnvista1(){
        $datos = [
            "Dir1" => "http://localhost/semana9/vista1",
            "Dir2" => "http://localhost/semana9/vista2",
            "Dir3" => "http://localhost/semana9/vista3"
        ];
        return view('vistaLogin/vista1',$datos);
    }


    public function Returnvista2()
    {
        $datos = [
            "Dir1" => "http://localhost/semana9/vista1",
            "Dir2" => "http://localhost/semana9/vista2",
            "Dir3" => "http://localhost/semana9/vista3"
        ];
        return view('vistaLogin/vista2',$datos);
    }



    public function Returnvista3()
    {
        $datos = [
            "Dir1" => "http://localhost/semana9/vista1",
            "Dir2" => "http://localhost/semana9/vista2",
            "Dir3" => "http://localhost/semana9/vista3"
        ];
        return view('vistaLogin/vista3',$datos);
    }



    public function Returnvista4($var)
    {
        if ($var == 1) {
            print_r("estoy dentro del 1er ciclo");
        }elseif ($var == 2){
            print_r("estoy dentro del 2do ciclo");
        }else {
            print_r("estoy dentro del 3er ciclo");
        }
        return view('vistaLogin/vista4',$datos);
    }


    public function Returncatalogo($variable)
    {
        $dates = [
            "zap" => "http://localhost/semana9/catalogo/zapatos",
            "ves" => "http://localhost/semana9/catalogo/vestidos"
        ];

        if($variable == "zapatos"){
            return view ('catalogo/vistazap',$dates);
        }elseif($variable == "vestidos"){
            return view ('catalogo/vistaves',$dates);
        }
    }


    public function testdb()
    {
    $db = \Config\Database::connect();
        if($db->connect()){
            echo("soy estupido");
        }else{
            echo("vamos a tomar");
    }   
    }
}


