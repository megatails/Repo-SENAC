<?php

class GerenciadorDeContatos {
    private $contatos = [];

    public function adicionarContato($nome, $email, $telefone) {
        $contato = new Contato($nome, $email, $telefone);
        $this->contatos[] = $contato;
    }

    public function getContatos() {
        return $this->contatos;
    }

    public function deletarContato($indice)
    {
        if (isset($this->contatos[$indice])) {
            unset($this->contatos[$indice]);
            $this->contatos = array_values($this->contatos);
        }

    }
}