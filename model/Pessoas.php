<?php

    class Pessoas{
//-----ATRIBUTOS
       private $nome;
       private $idade;
       private $cpf;

       function __construct($nome, $idade, $cpf){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
       }

//-----MÉTODOS
       public function getNome(){
           return $this->nome;
       }

       public function setNome($nome){
           $this->nome = $nome;
       }


       public function getIdade(){
           return $this->idade;
       }

       public function setIdade($idade){
           $this->idade = $idade;
       }

       public function getCpf(){
           return $this->cpf;
       }

       public function setCpf($cpf){
           $this->cpf = $cpf;
       }

       public function cadastrarPessoa($con, $pessoa){
            try{
                $query = $con->prepare("INSERT INTO usuarios (nome, idade, cpf) VALUES(?,?,?)");
                $query->execute([
                    $nome->getNome(),
                    $idade->getIdade(),
                    $cpf->getCpf()
                ]);

                return $query;
            }catch(PDOException $e){
                return false;
            }
       }
    }