<?php

class GerenciadorDeContatos {

    public function adicionarContato($nome, $email, $telefone) 
    {
        $contato = new Contato($nome, $email, $telefone);
        $_SESSION['contatos'][] = $contato;
    }

    public function getContatos() 
    {
        return $_SESSION['contatos'];
    }

    public function deletarContato($indice)
    {
        if (isset($_SESSION['contatos'][$indice])) 
        {
            array_splice($_SESSION['contatos'], $indice, 1);
        }

    }

    public function recuperaContato($indice)
    {
        return $_SESSION['contatos'][$indice]; 
    }

    public function editarContato($nome, $email, $telefone) 
    {
        
    }
}