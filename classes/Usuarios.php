<?php 

require_once 'DB.php';

class Usuarios extends DB {

	protected $tabela = 'tb_usuario';

	public function findUnit($id) {
		$sql = "SELECT * FROM $this->tabela WHERE id = :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id', $id, PDO::PARAM_INT);
		$stm->execute();
		return $stm->fetch();
	}

	public function findAll() {
		$sql = "SELECT * FROM $this->tabela";
		$stm = DB::prepare($sql);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function insert($nome, $email, $senha) {
		$sql = "INSERT INTO $this->tabela (email, senha, nome) VALUES (:email, :senha, :nome)";
		$stm = DB::prepare($sql);
		$stm->bindParam(':nome', $nome);
		$stm->bindParam(':email', $email);
		$stm->bindParam(':senha', $senha);
		return $stm->execute();
	}

	public function update($id, $nome, $email, $senha) {
		$sql = "UPDATE $this->tabela SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':nome', $nome);
		$stm->bindParam(':email', $email);
		$stm->bindParam(':senha', $senha);
		$stm->bindParam(':id', $id, PDO::PARAM_INT);
		return $stm->execute();	
	}

	public function delete($id) {
		$sql = "DELETE FROM $this->tabela WHERE id = :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id', $id, PDO::PARAM_INT);
		return $stm->execute();
	}

}

