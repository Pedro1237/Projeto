<?php
class Autor {
    private $NomeAutor;
    private $TelAutor;
    private $EmailAutor;
    private $EndAutor;

    public function __construct(string $NomeAutor, string $TelAutor, string $EmailAutor, string $EndAutor) {
        $this->definirNome($NomeAutor);
        $this->definirEmail($EmailAutor);
        $this->definirEndereco($EndAutor);
        $this->definirTelefone($TelAutor);
    }

    private function definirNome(string $NomeAutor) {
        $this->NomeAutor = $NomeAutor;
    }

    public function definirEmail(string $EmailAutor) {
        $this->EmailAutor = $EmailAutor;
    }

    public function definirEndereco(string $EndAutor) {
        $this->EndAutor = $EndAutor;
    }

    public function definirTelefone(string $TelAutor) {
        $this->TelAutor = $TelAutor;
    }

    public function obterNome() {
        return $this->NomeAutor;
    }

    public function obterEmail() {
        return $this->EmailAutor;
    }

    public function obterEndereco() {
        return $this->EndAutor;
    }

    public function obterTelefone() {
        return $this->TelAutor;
    }
}
