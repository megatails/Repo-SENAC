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

    public function atualizarContato($nome, $email, $telefone, $indice) 
    {
        if (isset($_SESSION['contatos'][$indice])) {
            $_SESSION['contatos'][$indice] = new Contato($nome, $email, $telefone);
        }
    }

    public function buscarContato($nome)
    {
        $resultado = [];
        foreach ($_SESSION['contatos'] as $indice => $contato) {
            if (stripos($contato->getNome(), $nome) !== false) {
                $resultado[$indice] = $contato;
            }
        }
        return $resultado;
    }

    public function contarContatos() 
    {
        return count($_SESSION['contatos']);
    }
}