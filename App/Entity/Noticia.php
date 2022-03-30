<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;




// mudar dados

class cursos
{
    /** 
     * Identificador único da cursos
     * @var integer
     */
    public $id;

    /** 
     * Título da cursos
     * @var string
     */
    public $titulo;

    /** 
     * Descrição da cursos (pode conter html)
     * @var string
     */
    public $descricao;

    /** 
     * Autor da cursos
     * @var string
     */
    public $autor;


    /** 
     * Data da publicação da cursos
     * @var timestamp
     */
    public $data;
    
    /** 
     * Define se a cursos está ativa (s or n)
     * @var string
     */
    public $status;

    

    /** 
     * Função para cadastrar a cursos no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Inserir a cursos no banco e retornar o ID
        $objDatabase = new Database('cursoss');
        $this->id = $objDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'autor'=> $this->autor,
            'status' => $this->status,
            'data' => $this->data,
        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as cursoss do banco de dados

     *@params string $where 
     *@params string $order
     *@params string $limit 
     *@return array
     */

    public static function getcursoss($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('cursoss');

        return ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsável por obter as cursoss do banco de dados

     *@params int $id
     *@return cursos
     */

    public static function getcursos($id)
    {

        $objDatabase = new Database('cursoss');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir cursoss no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('cursoss');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a cursos no banco 
     * @return boolean
     */
    public function atualizar()
    {
        //Definir a data
        $this->data = date('Y-m-d');

        $objDatabase = new Database('cursoss');

        return ($objDatabase)->update('id = ' . $this->id, [
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'autor'=> $this->autor,
            'status' => $this->status,
            'data' => $this->data,
        ]);
    }
}
