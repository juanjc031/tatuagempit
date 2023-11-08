<?php
class Service
{
  protected $con;

  public function __construct()
  {
    try {
      $this->con = new PDO('mysql:host=localhost;dbname=tatuagem;', 'root', '');
    } catch (PDOException $erro) {
      echo 'Erro ao conectar com o MySQL: ' . $erro->getMessage();
    };
  }

  public function Cadastrar($nome, $email, $senha, $usuario): array
  {
    $retorno = [];

    try {
      $senhaCripto = md5($senha);
      $sql = "INSERT INTO usuario (nome, senha, usuario, email, tatuador) VALUES ('$nome', '$senhaCripto', '$usuario', '$email', 0)";

      $stmt = $this->con->prepare($sql);
      $stmt->execute();

      $retorno["data"] = "";
      $retorno["message"] = "Usuário cadastrado";
      $retorno["resultado"] = true;
    } catch (PDOException $e) {
      $retorno["error"] = $e->getMessage();
      $retorno["resultado"] = false;
      $retorno["data"] = "";
    }

    return $retorno;
  }

  public function CadastrarTatuador($nome, $email, $senha, $usuario, $telefone, $instagram, $endereco, $carac, $estilo, $tamanho): array
  {
    $retorno = [];

    try {
      $senhaCripto = md5($senha);
      $sql = "INSERT INTO usuario (nome, senha, usuario, email, tatuador, telefone, instagram, endereco, caracteristicas, estilo, tamanho) VALUES ('$nome', '$senhaCripto', '$usuario', '$email', 1, '$telefone', '$instagram', '$endereco', '$carac', '$estilo', $tamanho)";

      $stmt = $this->con->prepare($sql);
      $stmt->execute();

      $retorno["data"] = "";
      $retorno["message"] = "Usuário cadastrado";
      $retorno["resultado"] = true;
    } catch (PDOException $e) {
      $retorno["error"] = $e->getMessage();
      $retorno["resultado"] = false;
      $retorno["data"] = "";
    }

    return $retorno;
  }

  public function Logar($email, $senha): array
  {
    $retorno = [];

    try {
      $senhaCripto = md5($senha);

      $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senhaCripto' ";

      $query = $this->con->query($sql);

      $usuario = $query->fetch(PDO::FETCH_ASSOC);

      if (!$usuario) {
        $retorno["error"] = "Erro ao logar!";
        $retorno["resultado"] = false;
        $retorno["data"] = "";
      } else {
        $retorno["data"] = $usuario;
        $retorno["message"] = "Usuário Logado";
        $retorno["resultado"] = true;
      }
    } catch (PDOException $e) {
      $retorno["error"] = $e->getMessage();
      $retorno["resultado"] = false;
      $retorno["data"] = "";
    }

    return $retorno;
  }

  public function BuscarTatuador($filtroestilo, $filtrotamanho)
  {
    $retorno = [];

    try {
      $where = "";

      if ($filtroestilo != ""){
        $where .= "AND estilo = '$filtroestilo'";
      } else if ($filtrotamanho != "") {
        $where .= "AND tamanho = $filtrotamanho";
      }

      $sql = "SELECT * FROM usuario WHERE tatuador = 1 $where";

      $query = $this->con->query($sql);

      $tatuadores = $query->fetchAll(PDO::FETCH_ASSOC);


      $retorno["data"] = $tatuadores;
      $retorno["message"] = "Sucesso!";
      $retorno["resultado"] = true;
    } catch (PDOException $e) {
      $retorno["error"] = $e->getMessage();
      $retorno["resultado"] = false;
      $retorno["data"] = "";
    }

    return $retorno;
  }
}
