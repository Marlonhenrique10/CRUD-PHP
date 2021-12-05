<?php 
/*
    + Classe Rotas
    + Criadas as URL, carregar os controladores, metodos e parametro
    + Formato URL - /controlador/metodo/parametros


*/
class Rota {
    // Atributo das Classes
    private $controlador = 'paginas';
    private $metodo = 'index';
    private $parametros = [];
    
    public function __construct() 
    {
        // Se a URL existir, jogar a url na variavel $url
        $url = $this->url() ? $this->url() : [0];
        // Chega se o controlador existe 
        if(file_exists('../app/Controller/'.ucwords($url[0]).'.php')):
            // Se existir setar como controlador
            $this->controlador = ucwords($url[0]);
            unset($url[0]);     
        endif;

        require_once '../app/Controller/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador; 
        
        if(isset($url[1])):
            if(method_exists($this->controlador, $url[1])):
                $this->metodo = $url[1];
                unset($url[1]);
            endif;
        endif;

        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);

    }

    private function url(){
        $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
        if(isset($url)):
            $url = trim(rtrim($url,'/'));
            $url = explode('/', $url);
            return $url;
        endif;
    }
}

?>