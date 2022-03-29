<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;




// mudar dados

class Professor
{
    /** 
     * Identificador único da Professor
     * @var integer
     */
    public $id;

    /** 
     * Nome da Professor
     * @var string
     */
    public $nome;

    /** 
     * Sobrenome do professor
     * @var string
     */
    public $sobrenome;

    /** 
     * CPF da Professor
     * @var Bigint
     */
    public $cpf;


    /** 
     * Formação do Professor
     * @var varchar
     */
    public $formação;

    /** 
     * Endereço do Professor
     * @var varchar
     */
    public $endereco;

     /** 
     * tel da Professor
     * @var Bigint
     */
    public $telefone;
    
     /** 
     * CPF da Professor
     * @var varchar
     */
    public $email;

    /** 
     * Define a ordem do professor
     * @var int
     */
    public $ordem;

    /** 
     * Define se a Professor está ativa (s or n)
     * @var string
     */
    public $status;

    

    /** 
     * Função para cadastrar a Professor no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a Professor no banco e retornar o ID
        $objDatabase = new Database('Professores');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'cpf'=> $this->cpf,
            'formacao' => $this->formacao,
            'endereco' => $this->endereco,
            'telefone' => $this->data,
            'email' => $this->email,
            'ordem' => $this->ordem,
            'status' => $this->status,
        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as Professors do banco de dados

     *@params string $where 
     *@params string $order
     *@params string $limit 
     *@return array
     */

    public static function getProfessores($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('Professores');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as Professors do banco de dados

     *@params int $id
     *@return Professor
     */

    public static function getProfessor($id)
    {

        $objDatabase = new Database('Professores');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir Professors no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('Professores');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a Professor no banco 
     * @return boolean
     */
    public function atualizar()
    {

        $objDatabase = new Database('Professores');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'cpf'=> $this->cpf,
            'formacao' => $this->formacao,
            'endereco' => $this->endereco,
            'telefone' => $this->data,
            'email' => $this->email,
            'ordem' => $this->ordem,
            'status' => $this->status,
        ]);
    }
}
