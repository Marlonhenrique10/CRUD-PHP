<?php

class Paginas extends Controller {

   public function index() {

        $dados = ['tituloPagina' =>'H & M Fashion Kids', 'descrição' =>'Moda feminina'];


       $this->view('paginas/home', $dados);
   }
   
    public function sobre() {
        $dados = ['tituloPagina' =>'Thor', 'descrição' =>'Moda feminina'];
    }
}

?>