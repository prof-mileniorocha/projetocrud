<?php

namespace App\Models\DAO;

use App\Lib\Conexao;

abstract class BaseDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConnection();
    }

    public function select($sql)
    {
        if (!empty($sql)) {
            return $this->conexao->query($sql);
        }
    }

    public function insert($table, $cols, $values)
    {
        if (!empty($table) && !empty($cols) && !empty($values)) {
            $parametros = $cols;
            $colunas = str_replace(":", "", $cols);

            $stmt = $this->conexao->prepare("INSERT IGNORE INTO $table ($colunas) VALUES ($parametros)");
            $stmt->execute($values);

            return $stmt->rowCount();
        } else {
            return false;
        }
    }

    public function update($table, $cols, $values, $where = null)
    {
        if (!empty($table) && !empty($cols) && !empty($values)) {
            if ($where) {
                $where = " WHERE $where ";
            }

            $stmt = $this->conexao->prepare("UPDATE $table SET $cols $where");
            $stmt->execute($values);

            return $stmt->rowCount();
        } else {
            return false;
        }
    }

    public function delete($table, $id)
    { 
        if (!empty($table)) {
            $stmt = $this->conexao->prepare("DELETE FROM $table WHERE id = {$id}");
            $stmt->execute();

            return $stmt->rowCount();
        } else {
            return false;
        }
    }

    public function deletePorIdUsuario($idUsuario)
    {
            $stmt = $this->conexao->prepare("DELETE FROM usuario_has_aplicativo WHERE usuario_has_aplicativo.usuario_id =  $idUsuario");
            $stmt->execute();
            return $stmt->rowCount();
    }
}
